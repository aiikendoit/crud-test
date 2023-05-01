<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data tables
// Route::get('/datatables', function () {
//     return view('backend.datatables');
// });

//user management
Route::get('/all-user', [App\Http\Controllers\backend\UserController::class, 'AllUser'])->name('AllUser');

//CRUD
Route::get('/add-user-index', [App\Http\Controllers\backend\UserController::class, 'AddUserIndex'])->name('AddUserIndex');
Route::post('insert-user', [App\Http\Controllers\backend\UserController::class, 'InsertUser'])->name('InsertUser');
Route::get('/edit-user/{id}', [App\Http\Controllers\backend\UserController::class, 'EditUser'])->name('EditUser');
Route::post('/update-user/{id}', [App\Http\Controllers\backend\UserController::class, 'UpdateUser'])->name('UpdateUser');
Route::get('/delete-user/{id}', [App\Http\Controllers\backend\UserController::class, 'DeleteUser'])->name('DeleteUser');