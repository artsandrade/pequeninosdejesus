<?php

namespace App\Http\Controllers;

use App\Models\noticiasModel;
use Illuminate\Http\Request;

class noticiasController extends Controller
{
    public function alterar(){
        $noticia = new noticiasModel();
        $noticia->setId_noticia($_POST['id_noticia']);
        $noticia->setTitulo($_POST['titulo']);
        $noticia->setCapa($_FILES['capa']);
        $noticia->setNoticia($_POST['noticia']);
        $noticia->setSituacao($_POST['situacao']);
        $noticia->alterar();
        $resposta = array('resposta'=>$noticia->getResposta());
        return response()->json($resposta);
    }

    public function inserir(){
        $noticia = new noticiasModel();
        $noticia->setTitulo($_POST['titulo']);
        $noticia->setCapa($_FILES['capa']);
        $noticia->setNoticia($_POST['noticia']);
        date_default_timezone_set('America/Sao_Paulo');
        $noticia->setDt_criacao(date('Y-m-d H:i:s'));
        $noticia->setSituacao('1');
        $noticia->inserir();
        $resposta = array('resposta'=>$noticia->getResposta());
        return response()->json($resposta);
    }

    public function remover(){
        $noticia = new noticiasModel();
        $noticia->setId_noticia($_POST['id_noticia']);
        $noticia->remover();
        $resposta = array('resposta'=>$noticia->getResposta());
        return response()->json($resposta);
    }
}
