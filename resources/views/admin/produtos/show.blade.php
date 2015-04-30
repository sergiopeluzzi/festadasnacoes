@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel">
                    <div class="panel-heading bg-red">
                        Visualizar {{ $nomeForm }}
                    </div>
                    <div class="panel-body">
                        <p><strong>Código: </strong>{{ $produto->id }}</p>
                        <p><strong>Descrição: </strong>{{ $produto->descricao }}</p>
                        <p><strong>Unidade: </strong>{{ $produto->id_unidade }}</p>
                        <p><strong>Valor: </strong>R$ {{ $produto->valor }}</p>

                        <a href="/admin/produtos" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop