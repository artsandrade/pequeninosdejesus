<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class depoimentosModel extends Model
{
    use HasFactory;
    private $id_depoimento;
    private $nome;
    private $tipo;
    private $depoimento;
    private $foto;
    private $resposta;

    public function getId_depoimento()
    {
        return $this->id_depoimento;
    }

    public function setId_depoimento($id_depoimento)
    {
        $this->id_depoimento = $id_depoimento;

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

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDepoimento()
    {
        return $this->depoimento;
    }

    public function setDepoimento($depoimento)
    {
        $this->depoimento = $depoimento;

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
        if (!empty($this->getNome()) && !empty($this->getTipo()) && !empty($this->getDepoimento())) {
            if ($this->getFoto()['error'] != 4) {
                $img = file_get_contents($this->getFoto()['tmp_name']);
                DB::table('depoimentos')->where('id_depoimento', '=', $this->getId_depoimento())->update([
                    'nome' => $this->getNome(),
                    'tipo' => $this->getTipo(),
                    'depoimento' => $this->getDepoimento(),
                    'foto' => $img,
                ]);
                $this->setResposta('alterado');
            } else {
                DB::table('depoimentos')->where('id_depoimento', '=', $this->getId_depoimento())->update([
                    'nome' => $this->getNome(),
                    'tipo' => $this->getTipo(),
                    'depoimento' => $this->getDepoimento(),
                ]);
                $this->setResposta('alterado');
            }
        } else {
            $this->setResposta('vazio');
        }
    }

    public function inserir()
    {
        if (!empty($this->getNome()) && !empty($this->getTipo()) && !empty($this->getDepoimento()) && $this->getFoto()['error'] != 4) {
            $img = file_get_contents($this->getFoto()['tmp_name']);
            DB::table('depoimentos')->insert([
                'nome' => $this->getNome(),
                'tipo' => $this->getTipo(),
                'depoimento' => $this->getDepoimento(),
                'foto' => $img,
            ]);
            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_depoimento())) {
            DB::table('depoimentos')->where('id_depoimento', '=', $this->getId_depoimento())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
