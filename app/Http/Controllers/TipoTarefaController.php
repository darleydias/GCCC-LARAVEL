<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TipoTarefa;
use App\Http\Requests\tipoTarefaFormRequest;
class TipoTarefaController extends Controller
{
   public function index (Request $request) {
        $tipoTar = TipoTarefa::query()->orderBy('desc')->get();
        $mensagem = $request->session()->get('mensagem');
        return view('tipotarefa.index',['tarefa'=>$tipoTar,'mensagem'=>$mensagem]);
    }
    public function create(){
        return view('tipotarefa.create');
    }
    public function store(tipoTarefaFormRequest $request){
       $desc = $request->desc;
       $tipoTar = new TipoTarefa();
       $tipoTar->desc=$desc;
       $tipoTar->save();
       $request->session()->flash('mensagem',"Tarefa {$tipoTar->desc} Criada com sucesso");
       return redirect()->route('listar_tipo_tarefas');
    }
    public function destroy(Request $request){
        TipoTarefa::destroy($request->id);
        $request->session()->flash('mensagem',"Tipo de tarefa excluida com sucesso");
        return redirect()->route('listar_tipo_tarefas');
    }
}
?>