@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel">
                    <div class="panel-heading bg-red">
                        <div class="row" style="padding: 10px">
                            <span style="font-size: 160%">{{ $nomeForm }}</span>
                        </div>
                    </div>
                    <div class="panel-body">
                        @foreach($nacoes as $nacao)
                            <div class="row">
                                <div align="center">
                                    <h3>{{ $nacao->nome }}</h3>
                                </div>
                                <div class="col-xs-3">
                                    <div class="small-box bg-gray" align="center">
                                        <p class="bg-red"><strong><em>{{ $prato->where('id_nacao', $nacao->id)->first()->descricao }}</em></strong></p>
                                        <div class="inner" align="right">
                                            <h3>
                                                <span class="pull-left"> {{ $vlr = $pedidoPrato->where('id_prato', $prato->where('id_nacao', $nacao->id)->first()->id)->sum('qnt') }} </span>
                                            </h3>
                                            <p>
                                                Pratos
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <p class="bg-red" align="center"><strong><em>Ingredientes</em></strong></p>
                                    <div class="inner">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center no-padding">Produto</th>
                                                    <th class="text-center no-padding">Qnt</th>
                                                    <th class="text-center no-padding">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ingredientes->where('id_prato', $prato->where('id_nacao', $nacao->id)->first()->id) as $ingrediente)
                                                    <tr>
                                                        <td>{{ $produto->find($ingrediente->id_produto)->descricao }}</td>
                                                        <td class="text-center">{{ $ingrediente->qnt * $vlr }} {{ $unidade->find($produto->find($ingrediente->id_produto)->id_unidade)->sigla }}</td>
                                                        <td class="text-right">R$ {{ number_format($produto->find($ingrediente->id_produto)->valor * $vlr,2) }}</td>
                                                        {!! Form::input('hidden', $total += $produto->find($ingrediente->id_produto)->valor * $vlr)  !!}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="small-box bg-gray" align="center">
                                        <p class="bg-red"><strong><em>Total {{ $prato->where('id_nacao', $nacao->id)->first()->descricao }}</em></strong></p>
                                        <div class="inner" align="right">
                                            <h3>
                                                <span>R$ {{ number_format($total, 2) }} </span>
                                                {!! Form::input('hidden', $total = 0) !!}
                                            </h3>
                                            <p>
                                                Valor total para produção
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

