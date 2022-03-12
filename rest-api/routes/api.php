<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Animalcontroller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#method GET
Route::get("/animals",[Animalcontroller::class, 'index']);

#method POST
Route::post("/animals",[Animalcontroller::class, 'store']);

#method PUT
Route::put("/animals/{id}",[Animalcontroller::class,'update']);

#method DELETE
Route::delete("/animals/{id}",[Animalcontroller::class, 'destroy']);