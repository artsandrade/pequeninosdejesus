<?php

namespace App\Http\Controllers;

use App\Models\prestacaoDeContasModel;
use Illuminate\Http\Request;

class prestacaoDeContasController extends Controller
{
    public function alterar()
    {
        $prestacao = new prestacaoDeContasModel();
        $prestacao->setId_prestacao($_POST['id_prestacao']);
        $prestacao->setTitulo($_POST['titulo']);
        date_default_timezone_set('America/Sao_Paulo');
        $prestacao->setData(date('Y-m-d', strtotime($_POST['data'])));
        $prestacao->setPrestacao($_POST['prestacao']);
        $prestacao->alterar();
        return response()->json([
            'resposta' => $prestacao->getResposta()
        ]);
    }

    public function inserir()
    {
        $prestacao = new prestacaoDeContasModel();
        $prestacao->setTitulo($_POST['titulo']);
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d', strtotime($_POST['data'])) . '-01';
        $prestacao->setData($data);
        $prestacao->setPrestacao($_POST['prestacao']);
        $prestacao->inserir();
        return response()->json([
            'resposta' => $prestacao->getResposta()
        ]);
    }

    public function remover()
    {
        $prestacao = new prestacaoDeContasModel();
        $prestacao->setId_prestacao($_POST['id_prestacao']);
        $prestacao->remover();
        return response()->json([
            'resposta' => $prestacao->getResposta()
        ]);
    }
}
