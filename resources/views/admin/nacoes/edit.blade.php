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
                        {!! Form::model($nacao, ['method' => 'PATCH', 'action' => ['NacoesController@update', $nacao->id] ]) !!}
                           @include ('admin.nacoes.form', ['botao' => 'Atualizar'])
                        {!! Form::close() !!}
                    </div>
                    @include ('errors.list')
                </div>
            </div>
        </div>
    </div>
@stop
