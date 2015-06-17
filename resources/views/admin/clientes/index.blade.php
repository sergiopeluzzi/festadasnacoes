@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading bg-red">
                    Lista de {{ $nomeForm }}
                </div>
                <div class="panel-body">
                    <table id="tb_clientes" class="table table-bordered table-hover">
                        <thead class="bg-red">
                        <tr>
                            <th class="text-center no-padding">Código</th>
                            <th class="text-center no-padding">Nome</th>
                            <th class="text-center no-padding">E-mail</th>
                            <th class="text-center no-padding">CPF</th>
                            <th class="text-center no-padding">Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td class="text-center">{{ $cliente->id }}</td>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td class="text-center">{{ $cliente->cpf }}</td>
                                <td class="text-center no-padding">

                                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                    <a data-toggle="tooltip" data-original-title="Detalhar" class="btn btn-sm bg-gray" href="{{ URL::to('admin/clientes/' . $cliente->id) }}"><i class="glyphicon glyphicon-user"></i></a>
                                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                    <a data-toggle="tooltip" data-original-title="Editar" class="btn btn-sm bg-gray" href="{{ URL::to('admin/clientes/' . $cliente->id . '/edit') }}"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a>
                                    {!! Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('admin.clientes.destroy', $cliente->id))) !!}
                                        {!! Form::submit('X', array('class' => 'btn bg-gray', 'data-toggle' => 'tooltip', 'data-original-title' => 'Excluir', 'onclick'=>'javascript:return confirm(\'Tem certeza que deseja excluir este Cliente?\')' )) !!}
                                    {!! Form::close() !!}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
            <a class="btn btn-danger" href="{{ url('admin/clientes/create') }}">Adicionar</a>
        </div>
    </div>
</div>

@stop