<?php

use App\Http\Controllers\BookController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#/api
Route::get('/', function () {
    return json_encode(['hello' => 'World']);
});

//"" class prints the FQCN, which is APP\HTTP\CONTROLLERS\BOOKCONTROLLER
Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{book}', [BookController::class, 'show']);

// INDEX: list resources 
// SHOW: single resrouces
// STORE: create a new resource
//UPDATE: update an existing resource
//DELETE: deleting / destroying an existing resource

Route::post('/books', [BookController::class, 'store']);

// PUT -- the ENTIRE object must be provided, meaning any missing fields are updated to null
// PATCh = change whatever fields are provided, and leave the rest alone!

Route::patch('books/{book}', [BookController::class, 'update']);

//DELETE
Route::delete('books/{book}', [BookController::class, 'destroy']);