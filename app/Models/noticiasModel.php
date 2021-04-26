<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class noticiasModel extends Model
{
    use HasFactory;
    private $id_noticia;
    private $titulo;
    private $capa;
    private $noticia;
    private $dt_criacao;
    private $situacao;
    private $resposta;

    public function getId_noticia()
    {
        return $this->id_noticia;
    }

    public function setId_noticia($id_noticia)
    {
        $this->id_noticia = $id_noticia;

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

    public function getCapa()
    {
        return $this->capa;
    }

    public function setCapa($capa)
    {
        $this->capa = $capa;

        return $this;
    }

    public function getNoticia()
    {
        return $this->noticia;
    }

    public function setNoticia($noticia)
    {
        $this->noticia = $noticia;

        return $this;
    }

    public function getDt_criacao()
    {
        return $this->dt_criacao;
    }

    public function setDt_criacao($dt_criacao)
    {
        $this->dt_criacao = $dt_criacao;

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
        if (!empty($this->getId_noticia()) && !empty($this->getTitulo()) && !empty($this->getNoticia())) {
            if ($this->getCapa()['error'] != 4) {
                $imagem_capa = file_get_contents($this->getCapa()['tmp_name']);
                DB::table('noticias')->where('id_noticia', '=', $this->getId_noticia())->update([
                    'titulo' => $this->getTitulo(),
                    'capa' => $imagem_capa,
                    'noticia' => $this->getNoticia(),
                    'situacao' => $this->getSituacao()
                ]);
                $this->setResposta('alterado');
            } else {
                DB::table('noticias')->where('id_noticia', '=', $this->getId_noticia())->update([
                    'titulo' => $this->getTitulo(),
                    'noticia' => $this->getNoticia(),
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
        if (!empty($this->getTitulo()) && !empty($this->getCapa()) && !empty($this->getNoticia())) {
            $imagem_capa = file_get_contents($this->getCapa()['tmp_name']);
            DB::table('noticias')->insert([
                'titulo' => $this->getTitulo(),
                'capa' => $imagem_capa,
                'noticia' => $this->getNoticia(),
                'dt_criacao' => $this->getDt_criacao(),
                'situacao' => $this->getSituacao()
            ]);
            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_noticia())) {
            DB::table('noticias')->where('id_noticia', '=', $this->getId_noticia())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
