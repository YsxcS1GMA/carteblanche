<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;

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
    return view('index');
});

Route::get('/auth', [AuthController::class, 'auth']);

Route::post('/auth_user', [AuthController::class, 'auth_user']);

Route::get('/reg', [AuthController::class, 'reg']);

Route::post('/reg_user', [AuthController::class, 'reg_user']);

Route::get('/exit', [AuthController::class, 'exit']);

Route::get('/services', [ApplicationController::class, 'services']);
Route::get('/masters', function() {
    return view('masters');
});

Route::post('/application_create/{id}', [ApplicationController::class, 'application_create']);

Route::get('/admin_applications', [AdminController::class, 'admin_applications']);

Route::get('/admin_applications/{id_app}/confirm', [AdminController::class, 'confirm']);
Route::get('/admin_applications/{id_app}/deny', [AdminController::class, 'deny']);

Route::get('/admin_services', [AdminController::class, 'admin_services']);
Route::post('/services_create', [AdminController::class, 'services_create']);

Route::post('/services_update/{id}', [AdminController::class, 'services_update']);
Route::get('/services_delete/{id}', [AdminController::class, 'services_delete']);
