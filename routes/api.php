<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/', function () {
    return response()->json([
    'Hello' => 'Word',
    'Felipinho' => 'Fofo',
]);
});

Route::post('/rota/post', [	HomeController::class,"index"]);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students', [StudentController::class, 'index']);

Route::post('/students', [StudentController::class, 'store']);
