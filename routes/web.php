<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/create-employee', [EmployeeController::class, 'create']);


Route::post('/store-employee', [EmployeeController::class, 'store']);


Route::get('employees', [EmployeeController::class, 'all']);


Route::get('/edit-employee', [EmployeeController::class, 'edit']);


Route::post('/update-employee', [EmployeeController::class, 'update']);


Route::get('/dashboard', [EmployeeController::class, 'welcome']);