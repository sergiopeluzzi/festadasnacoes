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
                        <p><strong>Código: </strong>{{ $cardapio->id }}</p>
                        <p><strong>Descrição: </strong>{{ $cardapio->descricao }}</p>
                        <p><strong>Evento: </strong>{{ $evento->find($cardapio->id_evento)->descricao }}</p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $cardapio->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $cardapio->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/cardapios" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop