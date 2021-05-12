<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class colaboradoresModel extends Model
{
    use HasFactory;
    private $id_colaborador;
    private $nome;
    private $funcao;
    private $desde;
    private $foto;
    private $situacao;
    private $resposta;

    public function getId_colaborador()
    {
        return $this->id_colaborador;
    }

    public function setId_colaborador($id_colaborador)
    {
        $this->id_colaborador = $id_colaborador;

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

    public function getFuncao()
    {
        return $this->funcao;
    }

    public function setFuncao($funcao)
    {
        $this->funcao = $funcao;

        return $this;
    }

    public function getDesde()
    {
        return $this->desde;
    }

    public function setDesde($desde)
    {
        $this->desde = $desde;

        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;

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
        if (!empty($this->getNome()) && !empty($this->getFuncao()) && !empty($this->getDesde())) {
            if ($this->getFoto()['error'] != 4) {
                $img_colab = file_get_contents($this->getFoto()['tmp_name']);
                DB::table('colaboradores')->where('id_colaborador', '=', $this->getId_colaborador())->update([
                    'nome' => $this->getNome(),
                    'funcao' => $this->getFuncao(),
                    'desde' => date('Y', strtotime($this->getDesde())),
                    'foto' => $img_colab,
                    'situacao' => $this->getSituacao()
                ]);
                $this->setResposta('alterado');
            } else {
                DB::table('colaboradores')->where('id_colaborador', '=', $this->getId_colaborador())->update([
                    'nome' => $this->getNome(),
                    'funcao' => $this->getFuncao(),
                    'desde' => date('Y', strtotime($this->getDesde())),
                    'situacao' => $this->getSituacao()
                ]);
                $this->setResposta('alterado');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function inserir()
    {
        if (!empty($this->getNome()) && !empty($this->getFuncao()) && !empty($this->getDesde()) && $this->getFoto()['error'] != 4) {
            $img_colab = file_get_contents($this->getFoto()['tmp_name']);
            DB::table('colaboradores')->insert([
                'nome' => $this->getNome(),
                'funcao' => $this->getFuncao(),
                'desde' => date('Y', strtotime($this->getDesde())),
                'foto' => $img_colab,
                'situacao' => $this->getSituacao()
            ]);
            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_colaborador())) {
            DB::table('colaboradores')->where('id_colaborador', '=', $this->getId_colaborador())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
