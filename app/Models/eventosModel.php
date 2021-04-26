<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class eventosModel extends Model
{
    use HasFactory;
    private $id_evento;
    private $nome;
    private $data;
    private $local;
    private $cor;
    private $situacao;
    private $resposta;

    public function getId_evento()
    {
        return $this->id_evento;
    }

    public function setId_evento($id_evento)
    {
        $this->id_evento = $id_evento;

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

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;

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
        if (!empty($this->getId_evento()) && !empty($this->getNome()) && !empty($this->getData()) && !empty($this->getLocal())) {
            DB::table('eventos')->where('id_evento', '=', $this->getId_evento())->update(
                [
                    'nome' => $this->getNome(),
                    'data' => $this->getData(),
                    'local' => $this->getLocal(),
                    'cor' => $this->getCor(),
                    'situacao' => $this->getSituacao()
                ]
            );
            $this->setResposta('alterado');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function inserir()
    {
        if (!empty($this->getNome()) && !empty($this->getData()) && !empty($this->getLocal())) {
            DB::table('eventos')->insert(
                [
                    'nome' => $this->getNome(),
                    'data' => $this->getData(),
                    'local' => $this->getLocal(),
                    'cor' => $this->getCor(),
                    'situacao' => $this->getSituacao()
                ]
            );
            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_evento())) {
            DB::table('eventos')->where('id_evento', '=', $this->getId_evento())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
