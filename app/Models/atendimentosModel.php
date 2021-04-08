<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class atendimentosModel extends Model
{
    use HasFactory;
    private $id_atendimento;
    private $nome;
    private $nome_aluno;
    private $cpf_aluno;
    private $email;
    private $telefone;
    private $celular;
    private $assunto;
    private $mensagem;
    private $situacao;
    private $dt_criacao;
    private $dt_alteracao;
    private $resposta;

    public function getId_atendimento()
    {
        return $this->id_atendimento;
    }

    public function setId_atendimento($id_atendimento)
    {
        $this->id_atendimento = $id_atendimento;

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

    public function getNome_aluno()
    {
        return $this->nome_aluno;
    }

    public function setNome_aluno($nome_aluno)
    {
        $this->nome_aluno = $nome_aluno;

        return $this;
    }

    public function getCpf_aluno()
    {
        return $this->cpf_aluno;
    }

    public function setCpf_aluno($cpf_aluno)
    {
        $this->cpf_aluno = $cpf_aluno;

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

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    public function getAssunto()
    {
        return $this->assunto;
    }

    public function setAssunto($assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    public function getMensagem()
    {
        return $this->mensagem;
    }

    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

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

    public function getDt_criacao()
    {
        return $this->dt_criacao;
    }

    public function setDt_criacao($dt_criacao)
    {
        $this->dt_criacao = $dt_criacao;

        return $this;
    }

    public function getDt_alteracao()
    {
        return $this->dt_alteracao;
    }

    public function setDt_alteracao($dt_alteracao)
    {
        $this->dt_alteracao = $dt_alteracao;

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

    public function alterar(){
        if(!empty($this->getId_atendimento()) && !empty($this->getSituacao())){
            date_default_timezone_set('America/Sao_Paulo');
            DB::table('atendimentos')->where('id_atendimento', '=', $this->getId_atendimento())->update([
                'situacao'=>$this->getSituacao(),
                'dt_alteracao'=>date('Y-m-d H:i:s')
            ]);
        }
    }
}
