@extends('layout')
@section('cabecalho')
    Tarefas
@endsection
@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif    
            <ul class='list-group'>
            <?php 
            foreach($tarefas as $t){
            ?>
                <li class='list-group-item'>
                    {{$t->TipoTarefa_id}}  - {{$t->solicitacao}}
                </li>
                <?php
            }?>
            </ul>
@endsection