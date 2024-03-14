<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return response()->json([
        'Hello' => 'Word',
        'Felipinho' => 'Fofo',
    ]);
});

Route::post('/rota/post', [HomeController::class, "index"]);


Route::put("/atualizar/aluno/{id}", [StudentController::class, "change"]);

Route::delete("/excluir/aluno/{id}", [StudentController::class, "delete"]);
