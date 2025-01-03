<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController; // Asegúrate de agregar esta línea
use Illuminate\Support\Facades\Route;

// Ruta principal para mostrar el formulario de bienvenida
Route::get('/', function () {
    return view('welcome');  // La vista que se muestra primero
});

// Rutas para login, registro y logout
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para el dashboard (la interfaz principal después del login)
Route::get('dashboard', function() {
    return view('dashboard');  // Asegúrate de crear esta vista
})->name('dashboard')->middleware('auth');

// Ruta para la vista de usuarios (muestra la lista de usuarios)
Route::resource('users', UserController::class)->middleware('auth'); // Usando resource para manejar las rutas CRUD

// Ruta para el índice (la vista en 'pages.index')
Route::get('/index', function () {
    return view('pages.index');  // Asegúrate de que 'pages.index' sea la vista correcta
})->name('index');

