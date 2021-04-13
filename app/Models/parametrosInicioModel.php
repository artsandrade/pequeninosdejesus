<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class parametrosInicioModel extends Model
{
    use HasFactory;
    private $id_parametro;
    private $tipo;
    private $numero;
    private $resposta;

    public function getId_parametro()
    {
        return $this->id_parametro;
    }

    public function setId_parametro($id_parametro)
    {
        $this->id_parametro = $id_parametro;

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

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

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
        if($this->getTipo()['alunos_matriculados']){
            DB::table('parametros_inicio')->where('id_parametro', '=', '1')->update([
                'numero'=>$this->getTipo()['alunos_matriculados']
            ]);
        }
        if($this->getTipo()['alunos_antigos']){
            DB::table('parametros_inicio')->where('id_parametro', '=', '2')->update([
                'numero'=>$this->getTipo()['alunos_antigos']
            ]);
        }
        if($this->getTipo()['colaboradores']){
            DB::table('parametros_inicio')->where('id_parametro', '=', '3')->update([
                'numero'=>$this->getTipo()['colaboradores']
            ]);
        }
        if($this->getTipo()['salas_de_aula']){
            DB::table('parametros_inicio')->where('id_parametro', '=', '4')->update([
                'numero'=>$this->getTipo()['salas_de_aula']
            ]);
        }
        $this->setResposta('alterado');
    }
}
