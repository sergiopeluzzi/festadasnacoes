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
                        <p><strong>Código: </strong>{{ $pedido->id }}</p>
                        <p><strong>Cliente: </strong>{{$cliente->find($pedido->id_cliente)->nome }}</p>
                        <p><strong>Data: </strong>{{ $pedido->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <hr>
                        <h4 class="text-red">Pratos</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr class="bg-red">
                                    <th class="text-center">Codigo</th>
                                    <th class="text-center">Descrição</th>
                                    <th class="text-center">Qnt</th>
                                    <th class="text-center">Preço</th>
                                    <th class="text-center">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($itens as $pratoPedido)
                                <tr>
                                    <td class="text-center">{{ $pratoPedido->id_prato }}</td>
                                    <td>{{ $prato->find($pratoPedido->id_prato)->descricao }}</td>
                                    <td class="text-center">{{ $pratoPedido->qnt }}</td>
                                    <td width="150px" class="text-center">R$ {{ number_format($prato->find($pratoPedido->id_prato)->valor,2) }}</td>
                                    <td width="150px" class="text-center">R$ {{ number_format($prato->find($pratoPedido->id_prato)->valor * $pratoPedido->qnt, 2)}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <p class="pull-right"><strong>Valor: </strong>R$ <span style="font-size: 30px; color: red">{{ number_format($pedido->valor,2) }}</span></p>
                        <hr>
                        <p><strong>Data Cadastro: </strong>{{ $pedido->created_at->format('d/m/Y à\s H:i:s') }}</p>
                        <p><strong>Ultima Alteração: </strong>{{ $pedido->updated_at->format('d/m/Y à\s H:i:s') }}</p>

                        <a href="/admin/vendas" class="btn btn-danger">Voltar</a>
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>


@stop