<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
    	$dados = $request->all();
    	return response()->json([
        "requisição" => $dados
    ]);
    }
}
