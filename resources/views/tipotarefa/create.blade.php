@extends('layout')
@section('cabecalho')
       Adicionar tipo de tarefa
@endsection
@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post">
    @csrf
    <div class="row">

            <div class="col col-6">
                <label for="desc">Tipo de tarefa</label>
                    <input type="text" class="form-control" name="desc" id="desc">     
            </div>
    </div>
    <button class="btn btn-dark mb-2" style="margin-top:40px">Adicionar</button>
</form>
@endsection