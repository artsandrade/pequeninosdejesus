<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class prestacaoDeContasModel extends Model
{
    use HasFactory;
    private $id_prestacao;
    private $titulo;
    private $data;
    private $prestacao;
    private $situacao;
    private $resposta;

    public function getId_prestacao()
    {
        return $this->id_prestacao;
    }

    public function setId_prestacao($id_prestacao)
    {
        $this->id_prestacao = $id_prestacao;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getPrestacao()
    {
        return $this->prestacao;
    }

    public function setPrestacao($prestacao)
    {
        $this->prestacao = $prestacao;

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
        if (!empty($this->getId_prestacao()) && !empty($this->getTitulo()) && !empty($this->getData()) && !empty($this->getPrestacao())) {
            DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $this->getId_prestacao())->update([
                'titulo' => $this->getTitulo(),
                'data' => $this->getData(),
                'prestacao' => $this->getPrestacao(),
                'situacao' => $this->getSituacao()
            ]);
            $this->setResposta('alterado');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function inserir()
    {
        if (!empty($this->getTitulo()) && !empty($this->getData()) && !empty($this->getPrestacao())) {
            DB::table('prestacoes_de_contas')->insert([
                'titulo' => $this->getTitulo(),
                'data' => $this->getData(),
                'prestacao' => $this->getPrestacao(),
                'situacao' => '1'
            ]);
            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_prestacao())) {
            DB::table('prestacoes_de_contas')->where('id_prestacao', '=', $this->getId_prestacao())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
