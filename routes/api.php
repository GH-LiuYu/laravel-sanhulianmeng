<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user/login', function () {
    return '3333';
});


Route::post('/nav/navs',[\App\Http\Controllers\NavController::class,'addNav']);//新增
Route::post('/nav/nav',[\App\Http\Controllers\NavController::class,'postNav']);//编辑保存
Route::get('/nav/navs',[\App\Http\Controllers\NavController::class,'getNavs']);//列表/打开编辑
Route::delete('/nav/navs',[\App\Http\Controllers\NavController::class,'deleteNav']);//删除

Route::get('/code/list',[\App\Http\Controllers\CodeListController::class,'getLists']);//列表/打开编辑

