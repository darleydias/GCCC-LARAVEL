<?php 
namespace App\Services;
use App\Models\Processo;
class CriadorDeProcessos{

    public function criarTarfefa(string $nome,string $solicitacao):Tarefa{
        //pego o request do form da view e extraio solicitacao e nome
       //Crio o POJO Processo instancio passando os parametros 
       $tar=Tarefa::create(['nome'=>$nome,'operacao_atual'=>'nao','finalizado'=>'nao','ativo'=>'1']);
       //pego o objeto Processo criado e crio a tarefa dele. Estou criando a 1 porque ela é criada 
       //pela primeira vez que o processo é criado 
       $tar->create(['solicitacao'=>$solicitacao,'TipoTarefa_id'=>'1','ativo'=>'1']);
       return $tarefa;
    }
} 



?> 