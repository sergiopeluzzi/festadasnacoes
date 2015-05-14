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
                        <table id="tb_pratos" class="table table-bordered table-hover">
                            <thead class="bg-red">
                                <tr>
                                    <th class="text-center no-padding">Código</th>
                                    <th class="text-center no-padding">Descrição</th>
                                    <th class="text-center no-padding">Nação</th>
                                    <th class="text-center no-padding">Valor</th>
                                    <th class="text-center no-padding">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($pratos as $prato)
                                <tr>
                                    <td class="text-center">{{ $prato->id }}</td>
                                    <td>{{ $prato->descricao }}</td>
                                    <td class="text-center">{{ $nacao->find($prato->id_nacao)->nome }}</td>
                                    <td class="text-right">R$ {{ number_format($prato->valor,2) }}</td>
                                    <td class="text-center no-padding">

                                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                        <a class="btn btn-sm bg-gray" href="{{ URL::to('admin/pratos/' . $prato->id) }}"><i class="glyphicon glyphicon-user"></i></a>
                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                        <a class="btn btn-sm bg-gray" href="{{ URL::to('admin/pratos/' . $prato->id . '/edit') }}"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a>
                                            {!! Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('admin.pratos.destroy', $prato->id))) !!}
                                            {!! Form::submit('X', array('class' => 'btn bg-gray')) !!}
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
                <a class="btn btn-danger" href="{{ url('admin/pratos/create') }}">Adicionar</a>
            </div>
        </div>
    </div>

@stop