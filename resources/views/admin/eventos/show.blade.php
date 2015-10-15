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
                        <p><strong>Código: </strong>{{ $evento->id }}</p>
                        <p><strong>Descrição: </strong>{{ $evento->descricao }}</p>
                        <p><strong>Data Inicial: </strong>{{ $evento->dataInicial->format('d/m/Y') }}</p>
                        <p><strong>Data Final: </strong>{{ $evento->dataFim->format('d/m/Y') }}</p>
                        <p><strong>Data Limite: </strong>{{ $evento->dataLimite->format('d/m/Y') }}</p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $evento->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $evento->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/eventos" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop