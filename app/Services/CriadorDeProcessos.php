<?php 
namespace App\Services;
use App\Models\Processo;
class CriadorDeProcessos{

    public function criarProcessos(string $nome,string $solicitacao):Processo{
        //pego o request do form da view e extraio solicitacao e nome
       //Crio o POJO Processo instancio passando os parametros 
       $processo=Processo::create(['nome'=>$nome,'operacao_atual'=>'nao','finalizado'=>'nao','ativo'=>'1']);
       //pego o objeto Processo criado e crio a tarefa dele. Estou criando a 1 porque ela é criada 
       //pela primeira vez que o processo é criado 
       $processo->tarefa()->create(['solicitacao'=>$solicitacao,'TipoTarefa_id'=>'1','ativo'=>'1']);
       return $processo;
    }
} 
?> 