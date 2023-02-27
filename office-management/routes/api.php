<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/managers', [ManagerController::class, 'index']);
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/projects', [EmployeeController::class, 'index']);

// post request 
Route::post('/departments', [DepartmentController::class, 'store']);
Route::post('/managers', [ManagerController::class, 'store']);
Route::post('/employees', [EmployeeController::class, 'store']);
Route::post('/projects',[ProjectController::class,'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
