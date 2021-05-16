<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class usuariosModel extends Model
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

    public function alterar()
    {
        if (!empty($this->getId_usuario()) && !empty($this->getNome()) && !empty($this->getTipo_usuario()) && !empty($this->getEmail())) {
            $valida_email = DB::table('usuarios')->where('email', '=', $this->getEmail());
            if ($valida_email->get()->contains('id_usuario', $this->getId_usuario()) || $valida_email->count() <= 0) {
                DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->update([
                    'nome' => $this->getNome(),
                    'email' => $this->getEmail(),
                    'tipo_usuario' => $this->getTipo_usuario(),
                    'situacao' => $this->getSituacao(),
                ]);
                if ($this->getAvatar()['error'] != 4) {
                    $img_avatar = file_get_contents($this->getAvatar()['tmp_name']);
                    DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->update([
                        'avatar' => $img_avatar,
                    ]);
                }

                if (!empty($this->getSenha())) {
                    DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->update([
                        'senha' => $this->getSenha(),
                    ]);
                }

                $this->setResposta('alterado');
            } else {
                $this->setResposta('email_cadastrado');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function inserir()
    {
        if (!empty($this->getNome()) && !empty($this->getTipo_usuario()) && !empty($this->getEmail()) && !empty($this->getSenha())) {
            $valida_email = DB::table('usuarios')->where('email', '=', $this->getEmail())->count();
            if ($valida_email <= 0) {
                if ($this->getAvatar()['error'] != 4) {
                    $img_avatar = file_get_contents($this->getAvatar()['tmp_name']);
                } else {
                    $img_avatar = file_get_contents(public_path('user.png'));
                }
                DB::table('usuarios')->insert([
                    'nome' => $this->getNome(),
                    'email' => $this->getEmail(),
                    'senha' => $this->getSenha(),
                    'tipo_usuario' => $this->getTipo_usuario(),
                    'avatar' => $img_avatar,
                    'situacao' => $this->getSituacao(),
                ]);
                $this->setResposta('inserido');
            } else {
                $this->setResposta('email_cadastrado');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_usuario())) {
            DB::table('usuarios')->where('id_usuario', '=', $this->getId_usuario())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
