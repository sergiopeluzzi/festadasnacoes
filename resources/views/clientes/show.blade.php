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
                        <p><strong>Nome: </strong>{{ $cliente->nome }}</p>
                        <p><strong>Código: </strong>{{ $cliente->id }}</p>
                        <p><strong>CPF: </strong>{{ $cliente->cpf }}</p>
                        <p><strong>Email: </strong>{{ $cliente->email }}</p>
                        <p><strong>Data Cadastro: </strong>{{ $cliente->created_at }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $cliente->updated_at }}</p>
                        <p><strong>Código de Usuário: </strong>{{ $cliente->id_user }}</p>

                        <a href="/clientes" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop