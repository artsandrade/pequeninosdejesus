<?php

use App\Http\Controllers\atendimentosController;
use App\Http\Controllers\colaboradoresController;
use App\Http\Controllers\depoimentosController;
use App\Http\Controllers\eventosController;
use App\Http\Controllers\galeriaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\noticiasController;
use App\Http\Controllers\parametrosInicioController;
use App\Http\Controllers\prestacaoDeContasController;
use App\Http\Controllers\usuariosController;
use App\Models\usuariosModel;
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
    $eventos = DB::table('eventos')->where('situacao', '=', '1')->get();
    $fotos = DB::table('imagens_albuns')->orderByRaw('RAND()')->limit(6)->get();
    $depoimentos = DB::table('depoimentos')->get();
    return view('site/inicio', compact('parametros_inicio', 'eventos', 'fotos', 'depoimentos'));
});

Route::get('/colaboradores', function () {
    $colaboradores = DB::table('colaboradores')->orderBy('nome')->where('situacao', '=', '1')->get();
    return view('site/colaboradores', compact('colaboradores'));
});

Route::get('/fale-conosco', function () {
    return view('site/fale-conosco');
});

Route::post('/fale-conosco', [atendimentosController::class, 'inserir'])->name('atendimentos_inserir');

Route::get('/galeria', function () {
    $galerias = DB::table('albuns')->where('situacao', '=', '1')->orderBy('nome')->paginate(6);
    return view('site/galeria', compact('galerias'));
})->name('galerias_site');

Route::get('/galeria/post', function () {
    if (!empty($_GET['id'])) {
        if ((DB::table('albuns')->where('id_album', '=', $_GET['id'])->count()) > 0) {
            $galerias = DB::table('albuns')->where('id_album', '=', $_GET['id'])->get();
            $imagens = DB::table('imagens_albuns')->where('album_id', '=', $_GET['id'])->get();
            //$ultimas_noticias = DB::table('noticias')->where('id_noticia', '!=', $_GET['id'])->limit(3)->orderByDesc('dt_criacao')->get();
            return view('site/galeria-post', compact('galerias', 'imagens'));
        } else {
            return redirect()->route('galerias_site');
        }
    } else {
        return redirect()->route('galerias_site');
    }
});

Route::get('/noticias', function () {
    $noticias = DB::table('noticias')->orderByDesc('dt_criacao')->paginate(6);
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
    $prestacoes = DB::table('prestacoes_de_contas')->where('situacao', '=', '1')->orderByDesc('data')->paginate(6);
    return view('site/prestacao-de-contas', compact('prestacoes'));
})->name('prestacoes_site');

Route::get('/prestacao-de-contas/post', function () {
    if (!empty($_GET['id'])) {
        if ((DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->count()) > 0) {
            $prestacoes = DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->get();
            $ultimas_prestacoes = DB::table('prestacoes_de_contas')->where('id_prestacao', '!=', $_GET['id'])->limit(3)->orderByDesc('data')->get();
            return view('site/prestacao-de-contas-post', compact('prestacoes', 'ultimas_prestacoes'));
        } else {
            return redirect()->route('prestacoes_site');
        }
    } else {
        return redirect()->route('prestacoes_site');
    }
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

    //Login e perfil
    Route::get('/painel/meu-perfil', function () {
        return view('painel/perfil/perfil');
    });

    Route::post('/painel/meu-perfil', [loginController::class, 'alterar_senha'])->name('perfil_alterar_senha');

    //ADMIN E SECRETARIA
    Route::middleware(['admin_sec'])->group(function () {
        //Atendimentos
        Route::get('/painel/atendimentos', function () {
            $atendimentos = DB::table('atendimentos')->get();
            $historicos = DB::table('atendimentos_historico')->orderByDesc('dt_alteracao')->get();
            return view('painel/atendimentos/visualizar', compact('atendimentos', 'historicos'));
        })->name('atendimentos');

        Route::post('/painel/atendimentos', [atendimentosController::class, 'alterar'])->name('atendimentos_alterar');
    });

    //ADMIN E COMUM
    Route::middleware(['admin_comum'])->group(function () {
        //Colaboradores
        Route::get('/painel/colaboradores', function () {
            $colaboradores = DB::table('colaboradores')->orderBy('nome')->get();
            return view('painel/colaboradores/colaboradores', compact('colaboradores'));
        })->name('colaboradores');

        Route::get('/painel/colaboradores/inserir', function () {
            return view('painel/colaboradores/inserir');
        });

        Route::post('/painel/colaboradores/inserir', [colaboradoresController::class, 'inserir'])->name('colaborador_inserir');

        Route::get('/painel/colaboradores/visualizar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('colaboradores')->where('id_colaborador', '=', $_GET['id'])->count()) > 0) {
                    $colaboradores = DB::table('colaboradores')->where('id_colaborador', '=', $_GET['id'])->get();
                    return view('painel/colaboradores/visualizar', compact('colaboradores'));
                } else {
                    return redirect()->route('colaboradores');
                }
            } else {
                return redirect()->route('colaboradores');
            }
        });

        Route::get('/painel/colaboradores/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('colaboradores')->where('id_colaborador', '=', $_GET['id'])->count()) > 0) {
                    $colaboradores = DB::table('colaboradores')->where('id_colaborador', '=', $_GET['id'])->get();
                    return view('painel/colaboradores/alterar', compact('colaboradores'));
                } else {
                    return redirect()->route('colaboradores');
                }
            } else {
                return redirect()->route('colaboradores');
            }
        });

        Route::post('/painel/colaboradores/alterar', [colaboradoresController::class, 'alterar'])->name('colaborador_alterar');

        Route::post('/painel/colaboradores/remover', [colaboradoresController::class, 'remover'])->name('colaborador_remover');

        //Depoimentos
        Route::get('/painel/depoimentos', function () {
            $depoimentos = DB::table('depoimentos')->orderBy('nome')->get();
            return view('painel/depoimentos/depoimentos', compact('depoimentos'));
        })->name('depoimentos');

        Route::get('/painel/depoimentos/inserir', function () {
            return view('painel/depoimentos/inserir');
        });

        Route::post('/painel/depoimentos/inserir', [depoimentosController::class, 'inserir'])->name('depoimento_inserir');

        Route::get('/painel/depoimentos/visualizar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('depoimentos')->where('id_depoimento', '=', $_GET['id'])->count()) > 0) {
                    $depoimentos = DB::table('depoimentos')->where('id_depoimento', '=', $_GET['id'])->get();
                    return view('painel/depoimentos/visualizar', compact('depoimentos'));
                } else {
                    return redirect()->route('depoimentos');
                }
            } else {
                return redirect()->route('depoimentos');
            }
        });

        Route::get('/painel/depoimentos/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('depoimentos')->where('id_depoimento', '=', $_GET['id'])->count()) > 0) {
                    $depoimentos = DB::table('depoimentos')->where('id_depoimento', '=', $_GET['id'])->get();
                    return view('painel/depoimentos/alterar', compact('depoimentos'));
                } else {
                    return redirect()->route('depoimentos');
                }
            } else {
                return redirect()->route('depoimentos');
            }
        });

        Route::post('/painel/depoimentos/alterar', [depoimentosController::class, 'alterar'])->name('depoimento_alterar');

        Route::post('/painel/depoimentos/remover', [depoimentosController::class, 'remover'])->name('depoimento_remover');

        //Eventos
        Route::get('/painel/eventos', function () {
            $eventos = DB::table('eventos')->orderByDesc('data')->get();
            return view('painel/eventos/eventos', compact('eventos'));
        })->name('eventos');

        Route::get('/painel/eventos/inserir', function () {
            return view('painel/eventos/inserir');
        });

        Route::post('/painel/eventos/inserir', [eventosController::class, 'inserir'])->name('eventos_inserir');

        Route::get('/painel/eventos/visualizar', function () {
            return view('painel/eventos/visualizar');
        });

        Route::get('/painel/eventos/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('eventos')->where('id_evento', '=', $_GET['id'])->count()) > 0) {
                    $eventos = DB::table('eventos')->where('id_evento', '=', $_GET['id'])->get();
                    return view('painel/eventos/alterar', compact('eventos'));
                } else {
                    return redirect()->route('eventos');
                }
            } else {
                return redirect()->route('eventos');
            }
        });

        Route::post('/painel/eventos/alterar', [eventosController::class, 'alterar'])->name('eventos_alterar');

        Route::post('/painel/eventos/remover', [eventosController::class, 'remover'])->name('eventos_remover');

        //Galeria
        Route::get('/painel/galeria', function () {
            $galerias = DB::table('albuns')->paginate(6);
            return view('painel/galeria/galeria', compact('galerias'));
        })->name('galerias');

        Route::get('/painel/galeria/inserir', function () {
            return view('painel/galeria/inserir');
        });

        Route::post('/painel/galeria/inserir', [galeriaController::class, 'inserir'])->name('galeria_inserir');

        Route::get('/painel/galeria/visualizar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('albuns')->where('id_album', '=', $_GET['id'])->count()) > 0) {
                    $albuns = DB::table('albuns')->where('id_album', '=', $_GET['id'])->get();
                    $imagens = DB::table('imagens_albuns')->where('album_id', '=', $_GET['id'])->get();
                    return view('painel/galeria/visualizar', compact('albuns', 'imagens'));
                } else {
                    return redirect()->route('galerias');
                }
            } else {
                return redirect()->route('galerias');
            }
        });

        Route::get('/painel/galeria/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('albuns')->where('id_album', '=', $_GET['id'])->count()) > 0) {
                    $albuns = DB::table('albuns')->where('id_album', '=', $_GET['id'])->get();
                    $imagens = DB::table('imagens_albuns')->where('album_id', '=', $_GET['id'])->get();
                    return view('painel/galeria/alterar', compact('albuns', 'imagens'));
                } else {
                    return redirect()->route('galerias');
                }
            } else {
                return redirect()->route('galerias');
            }
        });

        Route::post('/painel/galeria/alterar', [galeriaController::class, 'alterar'])->name('galeria_alterar');

        Route::post('/painel/galeria/remover', [galeriaController::class, 'remover'])->name('galeria_remover');

        Route::post('/painel/galeria/remover_imagem', [galeriaController::class, 'remover_imagem'])->name('galeria_remover_imagem');

        //Noticias
        Route::get('/painel/noticias', function () {
            $noticias = DB::table('noticias')->orderByDesc('dt_criacao')->paginate(6);
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
    });

    //ADMIN E FINANCEIRO
    Route::middleware(['admin_fin'])->group(function () {
        //Prestacao de contas
        Route::get('/painel/prestacao-de-contas/inserir', function () {
            return view('painel/prestacao-de-contas/inserir');
        });

        Route::post('/painel/prestacao-de-contas/inserir', [prestacaoDeContasController::class, 'inserir'])->name('prestacao_inserir');

        Route::get('/painel/prestacao-de-contas', function () {
            $prestacoes = DB::table('prestacoes_de_contas')->orderByDesc('data')->get();
            return view('painel/prestacao-de-contas/prestacao-de-contas', compact('prestacoes'));
        })->name('prestacoes');

        Route::get('/painel/prestacao-de-contas/visualizar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->count()) > 0) {
                    $prestacoes = DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->get();
                    return view('painel/prestacao-de-contas/visualizar', compact('prestacoes'));
                } else {
                    return redirect()->route('prestacoes');
                }
            } else {
                return redirect()->route('prestacoes');
            }
        });

        Route::post('/painel/prestacao-de-contas/remover', [prestacaoDeContasController::class, 'remover'])->name('prestacao_remover');
    });

    //ADMIN APENAS
    Route::middleware(['admin'])->group(function () {
        //Parametros inicio
        Route::get('/painel/parametros-inicio/alterar', function () {
            $parametros_inicio = DB::table(('parametros_inicio'))->get();
            return view('painel/parametros-inicio/alterar', compact('parametros_inicio'));
        });

        Route::post('/painel/parametros-inicio/alterar', [parametrosInicioController::class, 'alterar'])->name('parametros_alterar');

        //Usuarios
        Route::get('/painel/usuarios/inserir', function () {
            return view('painel/usuarios/inserir');
        });

        Route::post('/painel/usuarios/inserir', [usuariosController::class, 'inserir'])->name('usuario_inserir');

        Route::get('/painel/usuarios', function () {
            $usuarios = DB::table('usuarios')->orderBy('nome')->get();
            return view('painel/usuarios/usuarios', compact('usuarios'));
        })->name('usuarios');

        Route::get('/painel/usuarios/visualizar', function () {
            return view('painel/usuarios/visualizar');
        });

        Route::get('/painel/usuarios/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('usuarios')->where('id_usuario', '=', $_GET['id'])->count()) > 0) {
                    $usuarios = DB::table('usuarios')->where('id_usuario', '=', $_GET['id'])->get();
                    return view('painel/usuarios/alterar', compact('usuarios'));
                } else {
                    return redirect()->route('usuarios');
                }
            } else {
                return redirect()->route('usuarios');
            }
        });

        Route::post('/painel/usuarios/alterar', [usuariosController::class, 'alterar'])->name('usuario_alterar');

        Route::post('/painel/usuarios/remover', [usuariosController::class, 'remover'])->name('usuario_remover');

        //ALTERACAO E REMOCAO
        Route::get('/painel/prestacao-de-contas/alterar', function () {
            if (!empty($_GET['id'])) {
                if ((DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->count()) > 0) {
                    $prestacoes = DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $_GET['id'])->get();
                    return view('painel/prestacao-de-contas/alterar', compact('prestacoes'));
                } else {
                    return redirect()->route('prestacoes');
                }
            } else {
                return redirect()->route('prestacoes');
            }
        });

        Route::post('/painel/prestacao-de-contas/alterar', [prestacaoDeContasController::class, 'alterar'])->name('prestacao_alterar');
    });
});
