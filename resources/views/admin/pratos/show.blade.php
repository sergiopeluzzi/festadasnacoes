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
                        <p><strong>Nação: </strong>{{ $nacao->find($prato->id_nacao)->nome }}</p>
                        <hr>
                        <h3>Ingredientes</h3>
                        <ul>
                            @foreach($ingrediente as $item)
                                <li>{{ $produto->find($item->id_produto)->descricao }}</li>
                            @endforeach
                        </ul>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $prato->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $prato->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/pratos" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop