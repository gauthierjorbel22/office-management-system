<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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


// public routes
Route::post('/login',[AuthController::class,'login']);
Route::post('/register', [AuthController::class, 'register']);
// get request

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/departments', [DepartmentController::class, 'index']);
    Route::get('/managers', [ManagerController::class, 'index']);
    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::get('/projects', [EmployeeController::class, 'index']);
    
    // find one article 
    Route::get('/departments/{id}', [DepartmentController::class, 'show']);
    Route::get('/managers/{id}', [ManagerController::class, 'show']);
    Route::get('/employees/{id}', [EmployeeController::class, 'show']);
    Route::get('/projects/{id}', [ProjectController::class, 'show']);
    // post
    Route::post('/departments', [DepartmentController::class, 'store']);
    Route::post('/managers', [ManagerController::class, 'store']);
    Route::post('/employees', [EmployeeController::class, 'store']);
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::post('/logout', [AuthController::class, 'register']);

    // update data
    Route::put('/departments/{id}', [DepartmentController::class, 'update']);
    Route::put('/managers/{id}', [ManagerController::class, 'update']);
    Route::put('/employees/{id}', [EmployeeController::class, 'update']);
    Route::put('/projects/{id}', [ProjectController::class, 'update']);

    // Delete 
    Route::delete('/departments/{id}', [DepartmentController::class, 'destroy']);
    Route::delete('/managers/{id}', [ManagerController::class, 'destroy']);
    Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
