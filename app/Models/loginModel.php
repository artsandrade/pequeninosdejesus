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
                if ($usuario->senha == $this->getSenha()) {
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
}
