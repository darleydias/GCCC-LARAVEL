<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{Processo,Tarefa};
use App\Http\Requests\processoFormRequest;
use App\Services\{CriadorDeProcessos,CriadorDeTarefas,RemovedorDeProcessos};

class ProcessoController extends Controller
{
   public function index (Request $request) {
        $processos = Processo::query()->orderBy('nome')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('processos.index',['processos'=>$processos,'mensagem'=>$mensagem]);
    }
    public function create(){
        return view('processos.create');
    }
    public function store(processoFormRequest $request,CriadorDeProcessos $criadorDeProcesso){
    // aqui estou chamando uma classe dentro de app\Services para colocar lá as regras de negócio
    $proc = $criadorDeProcesso->criarProcessos($request->nome,$request->solicitacao);
    $request->session()->flash('mensagem',"Processo {$proc->nome} Criado com sucesso");
       return redirect()->route('listar_processos');
    }
    public function destroy(Request $request, RemovedorDeProcessos $removedorDeProcessos){
        //retorno o processo
        $nomeProcesso=$removedorDeProcessos->removerProcesso($request->id);
        $request->session()->flash('mensagem',"Processo $nomeProcesso excluido com sucesso");
        return redirect()->route('listar_processos');
    }                        //estou pegando este $id da rota (/processo/{id}/editaNome)
                             //|
                            // v
    public function editaNome($id, Request $request){
        $novoNome = $request->nome;
        $processo = Processo::find($id);
        $processo->nome=$novoNome;
        $processo->save();
    }
}

?>