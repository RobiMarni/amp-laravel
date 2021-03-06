<?php

use Illuminate\Http\Request;

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

Route::get('/students', function()
{
    $data['students'] = ['robert', 'rados', 'robi'];
    return $data;
})->middleware('passwordFilter');

Route::post('/students', function(Request $request)
{
    return $request->all();
})->middleware('passwordFilter');






Route::patch('/students/{id}', function(Request $request)
{
    return $request->all();
})->middleware('passwordFilter');

Route::delete('/students/{id}', function($id)
{
    dd("Student čiji je ID:{$id} je obrisan.");
})->middleware('passwordFilter');