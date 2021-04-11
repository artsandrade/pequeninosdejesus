<?php

namespace App\Http\Controllers;

use App\Models\loginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
  public function efetuar_login()
  {
    $usuario = new loginModel();
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['senha']);
    $usuario->efetuar_login();
    $resposta = array('resposta' => $usuario->getResposta());
    return response()->json($resposta);
  }

  //Alteracao de senha com usuario logado no painel
  public function alterar_senha()
  {
    $usuario = new loginModel();
    $usuario->setId_usuario($_POST['id_usuario']);
    $usuario->setSenha(password_hash($_POST['senha_nova'], PASSWORD_DEFAULT));
    $usuario->setSenha_antiga($_POST['senha_antiga']);
    $usuario->alterar_senha();
    $resposta = array('resposta' => $usuario->getResposta());
    return response()->json($resposta);
  }

  //Alteracao de senha com codigo recebido pelo email
  public function alterar_senha2()
  {
    $usuario = new loginModel();
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));
    $usuario->setCodigo_senha($_POST['codigo_senha']);
    $usuario->alterar_senha2();
    $resposta = array('resposta' => $usuario->getResposta());
    return response()->json($resposta);
  }

  public function recuperar_senha()
  {
    $usuario = new loginModel();
    $usuario->setEmail($_POST['email']);
    $usuario->recuperar_senha();
    $resposta = array('resposta' => $usuario->getResposta());
    return response()->json($resposta);
  }

  public function logout(Request $request)
  {
    if ($request->session()->exists('usuario_id')) {
      Session::flush();
      return redirect()->route('login');
    }
  }
}
