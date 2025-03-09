<?php

use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/',function(Request $request){
    return "server running ";
});
Route::post('/register_employee', [EmployeeAuthController::class,'register']);
Route::post('/login_employee', [EmployeeAuthController::class,'login']);
Route::post('/logout_employee', [EmployeeAuthController::class,'logout'])->middleware('auth:sanctum');

Route::group(['prefix'=>'employee'],function(){
    Route::get('/', [EmployeeController::class,'index']);
});
