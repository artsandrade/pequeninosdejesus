<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class galeriaModel extends Model
{
    use HasFactory;
    private $id_album;
    private $nome;
    private $capa;
    private $situacao;
    private $id_imagem;
    private $imagem;
    private $resposta;

    public function getId_album()
    {
        return $this->id_album;
    }

    public function setId_album($id_album)
    {
        $this->id_album = $id_album;

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

    public function getCapa()
    {
        return $this->capa;
    }

    public function setCapa($capa)
    {
        $this->capa = $capa;

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

    public function getId_imagem()
    {
        return $this->id_imagem;
    }

    public function setId_imagem($id_imagem)
    {
        $this->id_imagem = $id_imagem;

        return $this;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function setImagem($imagem)
    {
        $this->imagem = $imagem;

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
    }

    public function inserir()
    {
        if (!empty($this->getNome())) {
            $this->setId_album(DB::table('albuns')->insertGetId([
                'nome' => $this->getNome(),
                'situacao' => '1'
            ]));

            foreach ($this->getImagem()['tmp_name'] as $key => $imagem) {
                $diretorio = public_path('template_site/images/galeria/');
                $ext = strtolower(substr($this->getImagem()['name'][$key], -4));
                $nome = date('d_m_Y_H_i_s') . $key . $ext;
                $arquivo = $diretorio . $nome;
                DB::table('imagens_albuns')->insert([
                    'imagem' => $nome,
                    'album_id' => $this->getId_album()
                ]);
                move_uploaded_file($this->getImagem()['tmp_name'][$key], $arquivo);

                if ($key == 0) {
                    DB::table('albuns')->where('id_album', $this->getId_album())->update([
                        'capa' => $nome
                    ]);
                }
            }

            $this->setResposta('inserido');
        } else {
            $this->setResposta('vazio');
        }
    }

    public function remover()
    {
        if (!empty($this->getId_album())) {
            DB::table('imagens_albuns')->where('album_id', '=', $this->getId_album())->delete();
            DB::table('albuns')->where('id_album', '=', $this->getId_album())->delete();
            $this->setResposta('removido');
        } else {
            $this->setResposta('vazio');
        }
    }
}
