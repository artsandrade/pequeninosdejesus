<?php

namespace App\Http\Controllers;

use App\Models\galeriaModel;
use Illuminate\Http\Request;

class galeriaController extends Controller
{
    public function alterar()
    {
        $galeria = new galeriaModel();
        $galeria->setId_album($_POST['id_album']);
        $galeria->setNome($_POST['nome']);
        $galeria->setImagem($_FILES['imagem']);
        $galeria->alterar();
        return response()->json([
            'resposta' => $galeria->getResposta()
        ]);
    }

    public function inserir()
    {
        $galeria = new galeriaModel();
        $galeria->setNome($_POST['nome']);
        $galeria->setImagem($_FILES['imagem']);
        $galeria->inserir();
        return response()->json([
            'resposta' => $galeria->getResposta()
        ]);
    }

    public function remover()
    {
        $galeria = new galeriaModel();
        $galeria->setId_album($_POST['id_album']);
        $galeria->remover();
        return response()->json([
            'resposta' => $galeria->getResposta()
        ]);
    }

    public function remover_imagem()
    {
        $galeria = new galeriaModel();
        $galeria->setId_imagem($_POST['id_imagem']);
        $galeria->setId_album($_POST['album_id']);
        $galeria->setImagem($_POST['imagem']);
        $galeria->remover_imagem();
        return response()->json([
            'resposta' => $galeria->getResposta()
        ]);
    }
}
