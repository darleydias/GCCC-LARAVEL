<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Processo;
use App\Http\Requests\processoFormRequest;
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
    public function store(processoFormRequest $request){
       //pego o request do form da view e extraio solicitacao e nome
       $solicitacao=$request->solicitacao;
       $nome = $request->nome;
       //Crio o POJO Processo instancio passando os parametros 
       $proc=Processo::create(['nome'=>$nome,'operacao_atual'=>'nao','finalizado'=>'nao','ativo'=>'1']);
       //pego o objeto Processo criado e crio a tarefa dele. Estou criando a 1 porque ela é criada 
       //pela primeira vez que o processo é criado 
       $proc->tarefa()->create(['solicitacao'=>$solicitacao,'TipoTarefa_id'=>'1','ativo'=>'1']);
       $request->session()->flash('mensagem',"Processo {$proc->nome} Criado com sucesso");
       return redirect()->route('listar_processos');
    }
    public function destroy(Request $request){
        //Mato um processo por id
        Processo::destroy($request->id);
        $request->session()->flash('mensagem',"Processo excluido com sucesso");
        return redirect()->route('listar_processos');
    }
}
?>