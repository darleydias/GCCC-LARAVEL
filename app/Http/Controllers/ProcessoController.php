<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Processo;
class ProcessoController extends Controller{
    // ################ Listando ###############
    public function index(Request $request) {
        //$request->query()
        $processos=Processo::query()->orderBy('nome')->get();
        $msg = $request->session()->get("msg");

        return view('processos.index',['processos'=>$processos,'msg'=>$msg]);
    }
    // ################ Criabdo ###############
    public function create(){
            return view('processos.create');  
    }
    // ################ Gravando ###############
    public function store(Request $request){
        $nome = $request->nome; 
        $processo = Processo::create($request->all());
        $request->session()->flash('msg',"Processo {$processo->nome} cadastrado.");
        return redirect()->route('listar_processos');

    }
    // ################ Apagando ###############
    public function destroy(Request $request){
           Processo::destroy($request->id);
           $request->session()->flash('msg',"Removida com sucesso.");
           return redirect()->route('listar_processos');

    }

}
?>