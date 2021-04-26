<?php

namespace App\Http\Controllers;

use App\Models\eventosModel;
use Illuminate\Http\Request;

class eventosController extends Controller
{
    public function alterar()
    {
        $evento = new eventosModel();
        $evento->setId_evento($_POST['id_evento']);
        $evento->setNome($_POST['nome']);
        date_default_timezone_set('America/Sao_Paulo');
        $evento->setData(date('Y-m-d H:i:s', strtotime($_POST['data'])));
        $evento->setLocal($_POST['local']);
        $evento->setCor($_POST['cor']);
        !empty($_POST['situacao']) ? $evento->setSituacao($_POST['situacao']) : $evento->setSituacao('0');
        $evento->alterar();
        return response()->json([
            'resposta' => $evento->getResposta()
        ]);
    }

    public function inserir()
    {
        $evento = new eventosModel();
        $evento->setNome($_POST['nome']);
        date_default_timezone_set('America/Sao_Paulo');
        $evento->setData(date('Y-m-d H:i:s', strtotime($_POST['data'])));
        $evento->setLocal($_POST['local']);
        $evento->setCor($_POST['cor']);
        !empty($_POST['situacao']) ? $evento->setSituacao($_POST['situacao']) : $evento->setSituacao('0');
        $evento->inserir();
        return response()->json([
            'resposta' => $evento->getResposta()
        ]);
    }

    public function remover()
    {
        $evento = new eventosModel();
        $evento->setId_evento($_POST['id_evento']);
        $evento->remover();
        return response()->json([
            'resposta' => $evento->getResposta()
        ]);
    }
}
