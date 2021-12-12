<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
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

Route::get('/test', function () {
    return view('test');
    // return view( view: 'test');
});

Route::get('projects',[ProjectController::class, 'index']);
Route::get('project/{id}',[ProjectController::class, 'show']);
Route::get('/create-project',[ProjectController::class, 'create']);
Route::POST('/create-project',[ProjectController::class, 'store']);


Route::get('/project/{id}/edit',[ProjectController::class, 'edit']);
Route::PUT('/project/{id}/edit',[ProjectController::class, 'update']);

Route::POST('/project/{id}/delete',[ProjectController::class, 'destroy']);

// Route::get( '/projects', action: 'ProjectController@index');
// Route::get('projects',[ProjectController::class, 'index']);
//Route::get( 'projects', action: 'ProjectController@index');
//Route::get( 'projects', [ProjectController::class, 'index']);