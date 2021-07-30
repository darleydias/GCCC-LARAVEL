@extends('layout')
@section('cabecalho')
    Tipo de tarefa
@endsection
@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif
    <a href="{{route('criar_tarefa')}}" class="btn btn-dark  mb-2">Adicionar</a>
    
            <ul class='list-group'>
            <?php 
            foreach($tarefa as $t){
            ?>
                <li class='list-group-item d-flex justify-content-between align-items-center'>
                {{$t->desc}}
                <form method="post" action="/tipoTarefa/remover/{{ $t->id }}"
                onSubmit="return confirm('Deseja excluir {{addslashes($t->desc)}}?')">
                @csrf
                @method('DELETE')
                    <button class="btn btn-danger btn-sm"><i class="fal fa-trash"></i></button>
                </form>
                </li>
                <?php
            }?>
            </ul>
@endsection