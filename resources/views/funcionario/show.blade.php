@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">

            <div class="col-lg-6" style="border:1px solid black; margin:0px">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control-plaintext" value='{{$funcionario->nome}}'>
            </div>
            <div class="col-lg-6" style="border:1px solid black">
                <label for="dtNascto" >Data de Nascimento</label>
                <input type="date" name="dtNascto" id="dtNascto" class="form-control-plaintext" value='{{$funcionario->dtNascto}}'>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 "style="border:1px solid black">
                <label for="salario" >Salario</label>
                <input type="text" name="salario" id="salario" class="form-control-plaintext" value='{{$funcionario->salario}}'>

            </div>

            <div class="col-lg-6" style="border:1px solid black">
            <label for="" >Status</label>
                <input name="status" id="status" class="form-control-plaintext"
                     value="{{$funcionario->status == 'A'?'Ativo':'Inativo'}}"/>
            </div>
        </div>
</div>
@endsection