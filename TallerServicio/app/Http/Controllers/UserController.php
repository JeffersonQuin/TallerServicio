<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // Mostrar la lista de usuarios
    public function index()
    {
        $users = User::all();  // Obtener todos los usuarios
        return view('pages.user.user', compact('users'));  // Asegúrate de que la vista exista en 'resources/views/pages/user/user.blade.php'
    }

    // Mostrar formulario para crear un nuevo usuario
    public function create()
    {
        return view('pages.user.create');  // Vista para crear un nuevo usuario
    }

    public function store(Request $request)
{
    // Validación de datos
    $validated = $request->validate([
        'username' => 'required|string|max:255|unique:users,username',
        'password' => 'required|string|min:8',
        'email' => 'required|email|unique:users,email',
    ]);

    try {
        // Crear un nuevo usuario usando asignación masiva
        $user = User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password), // Asegúrate de encriptar la contraseña
            'email' => $request->email,
        ]);


        return redirect()->route('users.index')->with('success', 'Usuario agregado exitosamente!');
    } catch (\Exception $e) {
        // Mostrar el error específico
        dd($e->getMessage());
    }
}
    // Mostrar formulario para editar un usuario
    public function edit($id)
    {
        $user = User::findOrFail($id);  // Obtener usuario por ID, o lanzar error si no se encuentra
        return view('pages.user.edit', compact('user'));  // Asegúrate de que la vista 'edit.blade.php' exista
    }

    // Actualizar un usuario
    public function update(Request $request, $id)
    {
        // Validación de datos de entrada para actualizar
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:users,username,' . $id,  // Excluir el ID actual de la validación de unicidad
            'password' => 'nullable|string|confirmed|min:8',  // Contraseña opcional pero debe ser válida si se proporciona
            'email' => 'required|string|email|unique:users,email,' . $id,  // Validación para email
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();  // Regresar con errores si la validación falla
        }

        // Buscar y actualizar el usuario
        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->email = $request->email;  // Actualizar el campo de email
        if ($request->password) {
            $user->password = Hash::make($request->password);  // Encriptar la nueva contraseña si se proporciona
        }
        $user->save();  // Guardar los cambios en la base de datos

        return redirect()->route('users.index');  // Redirigir a la lista de usuarios
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);  // Obtener usuario por ID
        $user->delete();  // Eliminar usuario de la base de datos
        return redirect()->route('users.index');  // Redirigir a la lista de usuarios
    }
}