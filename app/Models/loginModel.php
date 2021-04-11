<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loginModel extends Model
{
    use HasFactory;
    private $id_usuario;
    private $nome;
    private $email;
    private $senha;
    private $senha_antiga;
    private $codigo_senha;
    private $tipo_usuario;
    private $avatar;
    private $situacao;
    private $resposta;

    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    public function setId_usuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    public function getSenha_antiga()
    {
        return $this->senha_antiga;
    }

    public function setSenha_antiga($senha_antiga)
    {
        $this->senha_antiga = $senha_antiga;

        return $this;
    }

    public function getCodigo_senha()
    {
        return $this->codigo_senha;
    }

    public function setCodigo_senha($codigo_senha)
    {
        $this->codigo_senha = $codigo_senha;

        return $this;
    }

    public function getTipo_usuario()
    {
        return $this->tipo_usuario;
    }

    public function setTipo_usuario($tipo_usuario)
    {
        $this->tipo_usuario = $tipo_usuario;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getSituacao()
    {
        return $this->situacao;
    }

    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    public function getResposta()
    {
        return $this->resposta;
    }

    public function setResposta($resposta)
    {
        $this->resposta = $resposta;

        return $this;
    }

    public function efetuar_login()
    {
        if (!empty($this->getEmail()) && !empty($this->getSenha())) {
            $email = DB::table('usuarios')->where('email', '=', $this->getEmail())->count();
            if ($email > 0) {
                $usuario = DB::table('usuarios')->where('email', '=', $this->getEmail())->first();
                if (password_verify($this->getSenha(), $usuario->senha)) {
                    if ($usuario->situacao == '1') {
                        session([
                            'usuario_id' => $usuario->id_usuario,
                            'usuario_nome' => $usuario->nome,
                            'usuario_email' => $usuario->email,
                            'usuario_tipo_usuario' => $usuario->tipo_usuario,
                            'usuario_avatar' => $usuario->avatar,
                            'usuario_situacao' => $usuario->situacao,
                        ]);
                        $this->setResposta('liberado');
                    } else {
                        $this->setResposta('bloqueado');
                    }
                } else {
                    $this->setResposta('invalido');
                }
            } else {
                $this->setResposta('invalido');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function alterar_senha()
    {
        if (!empty($this->getId_usuario()) && !empty($this->getSenha()) && !empty($this->getSenha_antiga())) {
            $usuario = DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->first();
            if (password_verify($this->getSenha_antiga(), $usuario->senha)) {
                DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->update([
                    'senha' => $this->getSenha()
                ]);
                $this->setResposta('alterado');
            } else {
                $this->setResposta('senha_incorreta');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function alterar_senha2()
    {
        if (!empty($this->getEmail()) && !empty($this->getCodigo_senha())) {
            if ((DB::table('usuarios')->where('email', '=', $this->getEmail())->where('codigo_senha', '=', $this->getCodigo_senha())->count()) > 0) {
                DB::table('usuarios')->where('email', '=', $this->getEmail())->update([
                    'senha' => $this->getSenha(),
                    'codigo_senha' => ''
                ]);
                $this->setResposta('alterado');
            } else {
                $this->setResposta('codigo_invalido');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function recuperar_senha()
    {
        if (!empty($this->getEmail())) {
            if ((DB::table('usuarios')->where('email', '=', $this->getEmail())->count()) > 0) {
                $codigo = mt_rand(9999999, 99999999);
                $url = "http://" . $_SERVER["HTTP_HOST"] . "/redefinir-senha?email=" . $this->getEmail() . "&codigo_senha=" . $codigo;
                DB::table('usuarios')->where('email', '=', $this->getEmail())->update([
                    'codigo_senha' => $codigo
                ]);

                $headers = "MIME-Version: 1.1\r\n";
                $headers .= "Content-type: text/html; charset=UTF-8\r\n";
                $headers .= "From: nova_senha@pequeninosdejesus.com.br\r\n"; // remetente
                $headers .= "Return-Path: nova_senha@pequeninosdejesus.com.br\r\n"; // return-path
                $text = "<html>
                                <head>
                                    <title>Redefinir senha</title>
                                </head>
                                <body>
                                    <h3>Olá!</h3>
                                    </br>
                                    <h3>Você solicitou uma redefinição de senha no site Pequeninos de Jesus.</h3>
                                    <h3>Clique <a href='$url'>aqui</a> para prosseguir! Assim, você será redirecionado ao site e criará uma nova senha para seu acesso ao painel.</h3>
                                    </div>
                                </body>
                            </html>";
                $envio = mail($this->getEmail(), "Redefinir senha - Pequeninos de Jesus", $text, $headers);

                if ($envio) {
                    $this->setResposta('enviado');
                }
            } else {
                $this->setResposta('invalido');
            }
        } else {
            $this->setResposta('vazio');
        }
    }
}
