<?php

namespace App\Http\Controllers;

use App\Models\atendimentosModel;
use Illuminate\Http\Request;

class atendimentosController extends Controller
{
    public function alterar(){
        $atendimento = new atendimentosModel();
        $atendimento->setId_atendimento($_POST['id_atendimento']);
        $atendimento->setSituacao($_POST['situacao']);
        $atendimento->alterar();
        return redirect()->route('atendimentos');
    }
}
