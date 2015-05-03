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
                        <table id="tb_cardapios" class="table table-bordered table-hover">
                            <thead class="bg-red">
                                <tr>
                                    <th class="text-center no-padding">Código</th>
                                    <th class="text-center no-padding">Descrição</th>
                                    <th class="text-center no-padding">Evento</th>
                                    <th class="text-center no-padding">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($cardapios as $cardapio)
                                <tr>
                                    <td class="text-center">{{ $cardapio->id }}</td>
                                    <td>{{ $cardapio->descricao }}</td>
                                    <td>{{ $evento->find($cardapio->id_evento)->descricao }}</td>
                                    <td class="text-center no-padding">

                                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                        <a class="btn btn-sm bg-gray" href="{{ URL::to('admin/cardapios/' . $cardapio->id) }}"><i class="glyphicon glyphicon-user"></i></a>
                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                        <a class="btn btn-sm bg-gray" href="{{ URL::to('admin/cardapios/' . $cardapio->id . '/edit') }}"><i class="glyphicon glyphicon-edit"></i></a>
                                        <a>
                                            {!! Form::open(array('class' => 'inline', 'method' => 'DELETE', 'route' => array('admin.cardapios.destroy', $cardapio->id))) !!}
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
                <a class="btn btn-danger" href="{{ url('admin/cardapios/create') }}">Adicionar</a>
            </div>
        </div>
    </div>

@stop