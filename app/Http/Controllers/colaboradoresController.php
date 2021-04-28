<?php

namespace App\Http\Controllers;

use App\Models\colaboradoresModel;
use Illuminate\Http\Request;

class colaboradoresController extends Controller
{
    public function alterar()
    {
        $colaborador = new colaboradoresModel();
        $colaborador->setId_colaborador($_POST['id_colaborador']);
        $colaborador->setNome($_POST['nome']);
        $colaborador->setFuncao($_POST['funcao']);
        $colaborador->setDesde($_POST['desde']);
        $colaborador->setFoto($_FILES['foto']);
        $colaborador->setSituacao($_POST['situacao']);
        $colaborador->alterar();
        return response()->Json([
            'resposta' => $colaborador->getResposta()
        ]);
    }

    public function inserir()
    {
        $colaborador = new colaboradoresModel();
        $colaborador->setNome($_POST['nome']);
        $colaborador->setFuncao($_POST['funcao']);
        $colaborador->setDesde($_POST['desde']);
        $colaborador->setFoto($_FILES['foto']);
        $colaborador->setSituacao($_POST['situacao']);
        $colaborador->inserir();
        return response()->Json([
            'resposta' => $colaborador->getResposta()
        ]);
    }

    public function remover()
    {
        $colaborador = new colaboradoresModel();
        $colaborador->setId_colaborador($_POST['id_colaborador']);
        $colaborador->remover();
        return response()->Json([
            'resposta' => $colaborador->getResposta()
        ]);
    }
}
