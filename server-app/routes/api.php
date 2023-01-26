<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\CardController;
use App\Http\Controllers\API\ContactController;


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

// Config Route to only list data Projects (Get Method)
Route::ApiResource('/projects', ProjectController::class)->only([
    'index'
]);

// Config Route to only list data of Cards (Get Method)
Route::ApiResource('/cards', CardController::class)->only([
    'index'
]);

// Config Route to only list add new Contact (Post Method)
Route::ApiResource('/contact_us', ContactController::class)->only([
    'store'
]);