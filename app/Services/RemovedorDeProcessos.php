<?php 
namespace App\Services;
use App\Models\{Processo,Tarefa};
use Illuminate\Support\Facades\DB;
class RemovedorDeProcessos{
    public function removerProcesso(int $processoId):String{
        $nomeProcesso='';
    DB::transaction(function ()use ($processoId,&$nomeProcesso){
        $processo=Processo::find($processoId);
        $nomeProcesso=$processo->nome;
        $processo->tarefa()->each(function (Tarefa $tarefa){
            $tarefa->delete();
        });
        $processo->delete();
    });
        return $nomeProcesso;
    }
} 
?> 