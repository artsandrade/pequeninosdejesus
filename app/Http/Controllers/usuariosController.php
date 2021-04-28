<?php

namespace App\Http\Controllers;

use App\Models\usuariosModel;
use Illuminate\Http\Request;

class usuariosController extends Controller
{
    public function alterar()
    {
        $usuario = new usuariosModel();
        $usuario->setId_usuario($_POST['id_usuario']);
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        !empty($_POST['senha']) ? $usuario->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT)) : $usuario->setSenha('');
        $usuario->setTipo_usuario($_POST['tipo_usuario']);
        $usuario->setAvatar($_FILES['avatar']);
        $usuario->setSituacao($_POST['situacao']);
        $usuario->alterar();
        return response()->Json([
            'resposta' => $usuario->getResposta()
        ]);
    }

    public function inserir()
    {
        $usuario = new usuariosModel();
        $usuario->setNome($_POST['nome']);
        $usuario->setEmail($_POST['email']);
        $usuario->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));
        $usuario->setTipo_usuario($_POST['tipo_usuario']);
        $usuario->setAvatar($_FILES['avatar']);
        $usuario->setSituacao($_POST['situacao']);
        $usuario->inserir();
        return response()->Json([
            'resposta' => $usuario->getResposta()
        ]);
    }

    public function remover()
    {
        $usuario = new usuariosModel();
        $usuario->setId_usuario($_POST['id_usuario']);
        $usuario->remover();
        return response()->Json([
            'resposta' => $usuario->getResposta()
        ]);
    }
}
