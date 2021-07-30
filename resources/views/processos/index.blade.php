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
            <?php 
            foreach($processos as $p){
            ?>
                <li class='list-group-item d-flex justify-content-between align-items-center'>
                {{$p->nome}}
                <span class="d-flex">
                    <a href="/processos/{{$p->id}}/tarefas" class="btn btn-info btn-sm" style="margin-right:15px;">
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
                <?php
            }?>
            </ul>
@endsection