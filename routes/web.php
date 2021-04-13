<?php

use App\Http\Controllers\atendimentosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\parametrosInicioController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rotas site principal

Route::get('/', function () {
    $parametros_inicio = DB::table(('parametros_inicio'))->get();
    return view('site/inicio', compact('parametros_inicio'));
});

Route::get('/colaboradores', function () {
    return view('site/colaboradores');
});

Route::get('/fale-conosco', function () {
    return view('site/fale-conosco');
});

Route::post('/fale-conosco', [atendimentosController::class, 'inserir'])->name('atendimentos_inserir');

Route::get('/galeria', function () {
    return view('site/galeria');
});

Route::get('/galeria/post', function () {
    return view('site/galeria-post');
});

Route::get('/noticias', function () {
    $noticias = DB::table('noticias')->orderByDesc('dt_criacao')->get();
    return view('site/noticias', compact('noticias'));
})->name('noticias_site');

Route::get('/noticias/post', function () {
    if (!empty($_GET['id'])) {
        if ((DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->count()) > 0) {
            $noticias = DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->get();
            $ultimas_noticias = DB::table('noticias')->where('id_noticia', '!=', $_GET['id'])->limit(3)->orderByDesc('dt_criacao')->get();
            return view('site/noticias-post', compact('noticias', 'ultimas_noticias'));
        } else {
            return redirect()->route('noticias_site');
        }
    } else {
        return redirect()->route('noticias_site');
    }
});

Route::get('/prestacao-de-contas', function () {
    return view('site/prestacao-de-contas');
});

Route::get('/prestacao-de-contas/post', function () {
    return view('site/prestacao-de-contas-post');
});

Route::get('/sobre-nos', function () {
    return view('site/sobre-nos');
});


//Rotas painel de controle
Route::middleware(['usuario_logado'])->group(function () {
    Route::get('/login', function () {
        return view('painel/login/login');
    })->name('login');
});

Route::post('/login', [loginController::class, 'efetuar_login'])->name('efetuar_login');

Route::get('/esqueci-minha-senha', function () {
    return view('painel/login/esqueci-minha-senha');
});

Route::post('/esqueci-minha-senha', [loginController::class, 'recuperar_senha'])->name('recuperar_senha');

Route::get('/redefinir-senha', function () {
    return view('painel/login/redefinir-senha');
});

Route::post('/redefinir-senha', [loginController::class, 'alterar_senha2'])->name('redefinir_senha');

Route::middleware(['autenticacao'])->group(function () {
    Route::get('/painel', function () {
        $atendimentos = DB::table('atendimentos')->limit(7)->orderByDesc('dt_criacao');
        $noticias = DB::table('noticias');
        $prestacoes_de_contas = DB::table('prestacoes_de_contas');
        return view('painel/inicio/inicio', compact('atendimentos', 'noticias', 'prestacoes_de_contas'));
    })->name('painel');

    Route::get('/logout', [loginController::class, 'logout'])->name('logout');

    //Atendimentos
    Route::get('/painel/atendimentos', function () {
        $atendimentos = DB::table('atendimentos')->get();
        return view('painel/atendimentos/visualizar', compact('atendimentos'));
    })->name('atendimentos');

    Route::post('/painel/atendimentos', [atendimentosController::class, 'alterar'])->name('atendimentos_alterar');

    //Colaboradores
    Route::get('/painel/colaboradores', function () {
        return view('painel/colaboradores/colaboradores');
    });

    Route::get('/painel/colaboradores/inserir', function () {
        return view('painel/colaboradores/inserir');
    });

    Route::get('/painel/colaboradores/visualizar', function () {
        return view('painel/colaboradores/visualizar');
    });

    Route::get('/painel/colaboradores/alterar', function () {
        return view('painel/colaboradores/alterar');
    });

    //Eventos
    Route::get('/painel/eventos', function () {
        return view('painel/eventos/eventos');
    });

    Route::get('/painel/eventos/inserir', function () {
        return view('painel/eventos/inserir');
    });

    Route::get('/painel/eventos/visualizar', function () {
        return view('painel/eventos/visualizar');
    });

    Route::get('/painel/eventos/alterar', function () {
        return view('painel/eventos/alterar');
    });

    //Galeria
    Route::get('/painel/galeria', function () {
        return view('painel/galeria/galeria');
    });

    Route::get('/painel/galeria/inserir', function () {
        return view('painel/galeria/inserir');
    });

    Route::get('/painel/galeria/visualizar', function () {
        return view('painel/galeria/visualizar');
    });

    Route::get('/painel/galeria/alterar', function () {
        return view('painel/galeria/alterar');
    });

    //Login e perfil
    Route::get('/painel/meu-perfil', function () {
        return view('painel/perfil/perfil');
    });

    Route::post('/painel/meu-perfil', [loginController::class, 'alterar_senha'])->name('perfil_alterar_senha');

    //Noticias
    Route::get('/painel/noticias', function () {
        $noticias = DB::table('noticias')->orderByDesc('dt_criacao')->get();
        return view('painel/noticias/noticias', compact('noticias'));
    })->name('noticias');

    Route::get('/painel/noticias/inserir', function () {
        return view('painel/noticias/inserir');
    });

    Route::post('/painel/noticias/inserir', [noticiasController::class, 'inserir'])->name('noticias_inserir');

    Route::get('/painel/noticias/visualizar', function () {
        if (!empty($_GET['id'])) {
            if ((DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->count()) > 0) {
                $noticias = DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->get();
                return view('painel/noticias/visualizar', compact('noticias'));
            } else {
                return redirect()->route('noticias');
            }
        } else {
            return redirect()->route('noticias');
        }
    });

    Route::get('/painel/noticias/alterar', function () {
        if (!empty($_GET['id'])) {
            if ((DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->count()) > 0) {
                $noticias = DB::table('noticias')->where('id_noticia', '=', $_GET['id'])->get();
                return view('painel/noticias/alterar', compact('noticias'));
            } else {
                return redirect()->route('noticias');
            }
        } else {
            return redirect()->route('noticias');
        }
    });

    Route::post('/painel/noticias/alterar', [noticiasController::class, 'alterar'])->name('noticias_alterar');

    Route::post('/painel/noticias/remover', [noticiasController::class, 'remover'])->name('noticias_remover');

    //Parametros inicio
    Route::get('/painel/parametros-inicio/alterar', function () {
        $parametros_inicio = DB::table(('parametros_inicio'))->get();
        return view('painel/parametros-inicio/alterar', compact('parametros_inicio'));
    });

    Route::post('/painel/parametros-inicio/alterar', [parametrosInicioController::class, 'alterar'])->name('parametros_alterar');

    //Prestacao de contas
    Route::get('/painel/prestacao-de-contas/inserir', function () {
        return view('painel/prestacao-de-contas/inserir');
    });

    Route::get('/painel/prestacao-de-contas', function () {
        return view('painel/prestacao-de-contas/prestacao-de-contas');
    });

    Route::get('/painel/prestacao-de-contas/visualizar', function () {
        return view('painel/prestacao-de-contas/visualizar');
    });

    Route::get('/painel/prestacao-de-contas/alterar', function () {
        return view('painel/prestacao-de-contas/alterar');
    });

    //Usuarios
    Route::get('/painel/usuarios/inserir', function () {
        return view('painel/usuarios/inserir');
    });

    Route::get('/painel/usuarios', function () {
        return view('painel/usuarios/usuarios');
    });

    Route::get('/painel/usuarios/visualizar', function () {
        return view('painel/usuarios/visualizar');
    });

    Route::get('/painel/usuarios/alterar', function () {
        return view('painel/usuarios/alterar');
    });
});
