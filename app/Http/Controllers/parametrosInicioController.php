<?php

namespace App\Http\Controllers;

use App\Models\parametrosInicioModel;
use Illuminate\Http\Request;

class parametrosInicioController extends Controller
{
    public function alterar()
    {
        $parametros = new parametrosInicioModel();
        $parametros->setTipo($_POST['parametro']);
        $parametros->alterar();
        return response()->json([
            'resposta' => $parametros->getResposta()
        ]);
    }
}
