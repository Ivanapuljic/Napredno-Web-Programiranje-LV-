<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Projects;
use Illuminate\Http\Request;
/*Prikaz svih projekata*/
Route::get('/', function () {
//
});
/* Novi projekt*/
Route::post('/', function (Request $request) {
//
});
/*Obriši zadatak*/
// Route::delete('//{id}', function ($id) {
// //
// });
