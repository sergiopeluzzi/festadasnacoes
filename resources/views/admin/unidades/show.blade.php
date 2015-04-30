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
                        <p><strong>Código: </strong>{{ $unidade->id }}</p>
                        <p><strong>Sigla: </strong>{{ $unidade->sigla }}</p>
                        <p><strong>Descrição: </strong>{{ $unidade->descricao }}</p>
                        <p><strong>Data Cadastro: </strong>{{ $unidade->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $unidade->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/unidades" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>
@stop