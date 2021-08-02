@extends('layout')
@section('cabecalho')
    Processos
@endsection
@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif
    <a href="{{route('criar_novo')}}" class="btn btn-dark  mb-2">Adicionar</a>
    
            <ul class='list-group'>
            @foreach($processos as $p)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span id="nome-processo-{{ $p->id }}">{{$p->nome}}</span>

                    <div class="input-group w-50" hidden id="input-nome-processo-{{ $p->id }}">
                        <input type="text" class="form-control" value="{{ $p->nome }}">
                        <div class="input-group-append">
                            <button class="btn btn-primary" onclick="editarProcesso({{ $p->id }})">
                                <i class="fas fa-check"></i>
                            </button>
                            @csrf
                        </div>
                    </div>


                <span class="d-flex">
                    <button class="btn btn-info btn-sm" style ="margin-right:5px" onClick="toggleInput({{$p->id}})">
                    <i class="fas fa-edit"></i>
                    </button>
                    <a href="/processos/{{$p->id}}/tarefas" class="btn btn-info btn-sm" style="margin-right:5px;">
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                    <form method="post" action="/remover/{{ $p->id }}"
                        onSubmit="return confirm('Deseja excluir {{addslashes($p->nome)}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button>
                    </form>
                </span>
                </li>
             @endforeach
            </ul>
<script>
    function toggleInput(processoId){
        const  nomeElemento = document.getElementById(`nome-processo-${processoId}`);
        const  inputElemento = document.getElementById(`input-nome-processo-${processoId}`);
        if(nomeElemento.hasAttribute('hidden')){
               nomeElemento.removeAttribute('hidden');
               inputElemento.hidden =true;

        }else{
            document.getElementById(`input-nome-processo-${processoId}`).removeAttribute('hidden');
            document.getElementById(`nome-processo-${processoId}`).hidden=true;
        }
    }
    ///#########################################
    function editarProcesso(processoId){
        let formData = new FormData();
        const nome = document.querySelector(`#input-nome-processo-${processoId}>input`).value;
        const url=`/processo/${processoId}/editaNome`;
        const token = document.querySelector('input[name="_token"]').value;
        formData.append('nome',nome);
        formData.append('_token',token);
        fetch(url,
            { body:formData,
              method:'POST'
            }).then(()=>{
                toggleInput(processoId);// fecha o imput
                document.getElementById(`nome-processo-${processoId}`).textContent=nome; //atualiza o nome
            });
    }

</script>            
@endsection