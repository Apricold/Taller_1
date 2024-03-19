<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EmployeeShiftsController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// DEPARTMENTS
Route::get('/departments', [DepartmentsController::class,'index']);
Route::post('/departments', [DepartmentsController::class,'store']);
Route::get('/departments/{id}', [DepartmentsController::class,'show']);
Route::put('/departments/{id}', [DepartmentsController::class,'update']);
Route::delete('/departments/{id}', [DepartmentsController::class,'destroy']);

//POSITION
Route::get('/position', [PositionController::class,'index']);
Route::post('/position', [PositionController::class,'store']);
Route::get('/position/{id}', [PositionController::class,'show']);
Route::put('/position/{id}', [PositionController::class,'update']);
Route::delete('/position/{id}', [PositionController::class,'destroy']);

//Employees
Route::get('/employees', [EmployeesController::class,'index']);
Route::post('/employees', [EmployeesController::class,'store']);
Route::get('/employees/{id}', [EmployeesController::class,'show']);
Route::put('/employees/{id}', [EmployeesController::class,'update']);
Route::delete('/employees/{id}', [EmployeesController::class,'destroy']);


//Employees_shift
Route::get('/employees_shifts', [EmployeeShiftsController::class,'index']);
Route::post('/employees_shifts', [EmployeeShiftsController::class,'store']);
Route::get('/employees_shifts/{id}', [EmployeeShiftsController::class,'show']);
Route::put('/employees_shifts/{id}', [EmployeeShiftsController::class,'update']);
Route::delete('/employees_shifts/{id}', [EmployeeShiftsController::class,'destroy']);
