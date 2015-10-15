@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel">
                    <div class="panel-heading bg-red">
                        Editar {{ $nomeForm }}
                    </div>
                    <div class="panel-body">
                        {!! Form::model($evento, ['method' => 'PATCH', 'action' => ['EventosController@update', $evento->id] ]) !!}
                           @include ('admin.eventos.form', ['botao' => 'Atualizar'])
                        {!! Form::close() !!}
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>
@stop
