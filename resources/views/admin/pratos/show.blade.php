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
                        <p><strong>Código: </strong>{{ $prato->id }}</p>
                        <p><strong>Descrição: </strong>{{ $prato->descricao }}</p>
                        <p><strong>Valor: </strong>{{ $prato->valor }}</p>
                        <p><strong>Nação: </strong>{{ $prato->id_nacao }}</p>

                        <a href="/admin/pratos" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop