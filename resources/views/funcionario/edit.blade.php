@extends('layouts.default')
@section('content')
<div class="container">
    <form action="{{route('funcionario.update',$funcionario->id)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <label for="" class="form-label">nome</label>
                <input type="text" name="nome" id="nome" class="form-control" value='{{$funcionario->nome}}'>
            </div>
            <div class="col-lg-6">
                <label for="" class="form-label">Data de Nascimento</label>
                <input type="date" name="dtNascto" id="dtNascto" class="form-control" value='{{$funcionario->dtNascto}}'>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <label for="" class="form-label">Salario</label>
                <input type="text" name="salario" id="salario" class="form-control" value='{{$funcionario->salario}}'>

            </div>

            <div class="col-lg-6">
            <label for="" class="form-label">Status</label>
                <select name="status" id="status" class="form-select">
                    <option value="A" {{$funcionario->status == "A"?"selected":""}}>Ativo</option>
                    <option value="I" {{$funcionario->status == "I"?"selected":""}}>Inativo</option>
                </select>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-outline-primary" value="Salvar">

            </div>
        </div>
    </form>
</div>
@endsection