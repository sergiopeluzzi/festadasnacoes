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
                        <p><strong>Código: </strong>{{ $funcionario->id }}</p>
                        <p><strong>Nome: </strong>{{ $funcionario->nome }}</p>
                        <p><strong>CPF: </strong>{{ $funcionario->cpf }}</p>
                        <p><strong>Email: </strong>{{ $usuario->email }}</p>
                        <p><strong>Código de Usuário: </strong>{{ $funcionario->id_user }}</p>
                        <p><strong>Tipo de Funcionário: </strong>{{ $usuario_tipo->descricao }}</p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $funcionario->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $funcionario->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/funcionarios" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop