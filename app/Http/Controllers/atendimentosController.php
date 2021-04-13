<?php

namespace App\Http\Controllers;

use App\Models\atendimentosModel;
use Illuminate\Http\Request;

class atendimentosController extends Controller
{
    public function alterar()
    {
        $atendimento = new atendimentosModel();
        $atendimento->setId_atendimento($_POST['id_atendimento']);
        $atendimento->setSituacao($_POST['situacao']);
        $atendimento->alterar();
        return redirect()->route('atendimentos');
    }

    public function inserir()
    {
        $atendimento = new atendimentosModel();
        $atendimento->setNome($_POST['nome']);
        $atendimento->setNome_aluno($_POST['nome_aluno']);
        $atendimento->setCpf_aluno($_POST['cpf_aluno']);
        $atendimento->setEmail($_POST['email']);
        $atendimento->setTelefone($_POST['telefone']);
        $atendimento->setCelular($_POST['celular']);
        $atendimento->setAssunto($_POST['assunto']);
        $atendimento->setMensagem($_POST['mensagem']);
        date_default_timezone_set('America/Sao_Paulo');
        $atendimento->setDt_criacao(date('Y-m-d H:i:s'));
        $atendimento->setSituacao('3');
        $atendimento->inserir();
        $resposta = array('resposta'=>$atendimento->getResposta());
        return response()->json($resposta);
    }
}
