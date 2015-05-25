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
                        <p><strong>Código: </strong>{{ $bebida->id }}</p>
                        <p><strong>Descrição: </strong>{{ $bebida->descricao }}</p>
                        <p><strong>Valor: </strong>R$ {{ number_format($bebida->valor,2) }}</p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $bebida->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $bebida->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/bebidas" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>
@stop

