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

    public function logout(Request $request){
        if($request->session()->exists('usuario_id')){
          Session::flush();
          return redirect()->route('login');
        }
      }
}
