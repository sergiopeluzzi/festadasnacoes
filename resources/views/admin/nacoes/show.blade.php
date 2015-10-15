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
                        <p><strong>Código: </strong>{{ $nacao->id }}</p>
                        <p><strong>Nome: </strong>{{ $nacao->nome }}</p>
                        <p><strong>Descrição: </strong>{{ $nacao->descricao }}</p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $nacao->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $nacao->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/nacoes" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop