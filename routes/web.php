<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\DesignationController;


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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return view("/admin/login");
});
Route::get('/admin/login', function () {
    return view("/admin/login");
});

Route::get('/admin/dashboard', function () {
    return view("/admin/dashboard");
});




Route::get('/admin/departments', [DepartmentController::class, 'index']);
Route::get('/admin/departments/add', [DepartmentController::class, 'create']);
Route::post('/admin/departments/add', [DepartmentController::class, 'store']);


Route::get('/admin/designations', [DesignationController::class, 'index']);













