<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::view('/home','/home')->name('home');
Route::view('auth/login','auth/login')
    ->name('login');

    // Route::post('custom-login', [StudentController::class, 'customLogin'])->name('login.custom'); 
Route::view('auth/register','auth/register')
    ->name('register');
// Route::get('register', function () {
//     })->middleware('AuthenticatesSessions');
Route::post('/registerasdsa', [StudentController::class, 'customRegistration'])
    ->name('register.customRegistration');
Route::post('login', [StudentController::class, 'customLogin'])
    ->name('customLogin');

Route::view('cursos','cursos')
    ->name('cursos');
Route::get('/indexCourse', [CourseController::class, 'index'])
->name('indexCourse');
Route::get('createCourse', [CourseController::class, 'createCourse'])
->name('createCourse');

// Route::group(['middleware' => ['AuthenticatesSessions']], function () {
//     Route::view('/home','/home')
//         ->name('home');

// });












// Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// Route::get('/', function () {
//     return Inertia::render('layout', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
