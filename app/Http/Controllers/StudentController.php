<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; 

class StudentController extends Controller
{
    public function change($id)
    {
        // atualizar um aluno com o ID fornecido
        $student = Student::find($id);
        
        if(!$student) {
            return response()->json(['message' => 'Aluno não encontrado'], 404);
        }


        return response()->json(['message' => 'Aluno atualizado com sucesso']);
    }

    public function delete($id)
    {
        // excluir um aluno com o ID fornecido
        $student = Student::find($id);

        if(!$student) {
            return response()->json(['message' => 'Aluno não encontrado'], 404);
        }

        $student->delete();

        return response()->json(['message' => 'Aluno excluído com sucesso']);
    }
}
