<?php

namespace App\Http\Controllers;

use App\Models\depoimentosModel;
use Illuminate\Http\Request;

class depoimentosController extends Controller
{
    public function alterar()
    {
        $depoimento = new depoimentosModel();
        $depoimento->setId_depoimento($_POST['id_depoimento']);
        $depoimento->setNome($_POST['nome']);
        $depoimento->setTipo($_POST['tipo']);
        $depoimento->setDepoimento($_POST['depoimento']);
        $depoimento->setFoto($_FILES['foto']);
        $depoimento->alterar();
        return response()->Json([
            'resposta' => $depoimento->getResposta()
        ]);
    }

    public function inserir()
    {
        $depoimento = new depoimentosModel();
        $depoimento->setNome($_POST['nome']);
        $depoimento->setTipo($_POST['tipo']);
        $depoimento->setDepoimento($_POST['depoimento']);
        $depoimento->setFoto($_FILES['foto']);
        $depoimento->inserir();
        return response()->Json([
            'resposta' => $depoimento->getResposta()
        ]);
    }

    public function remover()
    {
        $depoimento = new depoimentosModel();
        $depoimento->setId_depoimento($_POST['id_depoimento']);
        $depoimento->remover();
        return response()->Json([
            'resposta' => $depoimento->getResposta()
        ]);
    }
}
