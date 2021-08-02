<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processo;

class TarefasController extends Controller
{
    public function index(int $ProId){
        //pego um processo pelo id e trago todas tarefas dele
        $tarefas= Processo::find($ProId)->tarefa;
        //devolvo par a view um aray com as tarefas
        return view('tarefas.index',['tarefas'=>$tarefas]);
    }
    //Sempre que for criar uma tarefa devo enviar pra ca o id do processo e os atributos da tarefa
    public function create(String $idPro,String $tipoTarefaId){
        $processo= Processo::find($idPro);
        $processo->tarefa()->create([
            'solicitacao'=>$solicitacao,//pegar os atributos da tarefa e questão
            'TipoTarefa_id'=>$tipoTarefaId]);
    }
}
