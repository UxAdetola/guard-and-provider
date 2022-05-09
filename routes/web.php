<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;

// use App\Http\Controllers\Auth;
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
// Route::get('/', function () {
//     return view('welcome');
//     // return "Adewole Noah";
// });

// // Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, "index"]);
// // Route::get('/pizzas/create', [App\Http\Controllers\PizzaController::class, "create"]);
// // Route::post('/pizzas', [App\Http\Controllers\PizzaController::class, "store"]);
// // Route::get('/pizzas/{id}', [App\Http\Controllers\PizzaController::class, "show"]);
// // Route::delete('/pizzas/{id}', [App\Http\Controllers\PizzaController::class, "destroy"]);

// Route::resource("/pizzas", PizzaController::class);
// Auth::routes();


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/writer', [LoginController::class,'showWriterLoginForm']);
Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
Route::get('/register/writer', [RegisterController::class,'showWriterRegisterForm']);

Route::post('/login/admin', [LoginController::class,'adminLogin']);
Route::post('/login/writer', [LoginController::class,'writerLogin']);
Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register/writer', [RegisterController::class,'createWriter']);

Route::group(['middleware' => 'auth:writer'], function () {
    Route::view('/writer', 'writer');
});

Route::group(['middleware' => 'auth:admin'], function () {
    
    Route::view('/admin', 'admin');
});

// Route::group(['middleware' => 'auth:writer'], function () {
//     Auth::routes();Route::view('/writer', 'writer');
// });
// Route::group(['middleware' => 'auth:admin'], function () {
//     Auth::routes();Route::view('/admin', 'admin');
// });
    

// Route::post('logout', [LoginController::class,'logout']);
// Route::get('logout', [LoginController::class,'logout']);

