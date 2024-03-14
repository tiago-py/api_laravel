<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
<<<<<<< HEAD
use App\Http\Controllers\StudentController; // Adicione a importação do StudentController

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
=======
use App\Http\Controllers\StudentController;
>>>>>>> c96ad9c40f0ab0b75aa731cd1db70467daf4b398

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        'Hello' => 'Word',
        'Felipinho' => 'Fofo',
    ]);
});

<<<<<<< HEAD
Route::post('/rota/post', [HomeController::class, "index"]);

Route::put("/atualizar/aluno/{id}", [StudentController::class, "change"]);

Route::delete("/excluir/aluno/{id}", [StudentController::class, "delete"]);
=======
Route::post('/rota/post', [	HomeController::class,"index"]);

Route::get('/students/{id}', [StudentController::class, 'show']);

Route::get('/students', [StudentController::class, 'index']);

Route::post('/students', [StudentController::class, 'store']);
>>>>>>> c96ad9c40f0ab0b75aa731cd1db70467daf4b398
