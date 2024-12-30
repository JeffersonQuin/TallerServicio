<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Ruta principal para mostrar el formulario de inicio de sesión
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

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

Route::get('/index', function () {
    return view('pages.index');  // Asegúrate de que 'pages.index' sea la vista correcta
})->name('index');