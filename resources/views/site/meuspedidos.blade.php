@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Início</a></li>
                <li class="active">Meus pedidos</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(Auth::guest())
                <div>
                    <h1 align="center">T_T</h1>
                    <h3 align="center">Usuário não logado</h3>
                    <h1 align="center">Por favor faça seu login!</h1>
                </div>
            @else
            <div class="col-md-12">
                <!-- Informar meus pedidos -->
                <header class="content-title"><h1 class="title">Meus pedidos</h1>
                    <p class="title-desc">Segue abaixo os pedidos realizados </p>
                </header>
                <div class="xs-margin"></div>
                @foreach($pedidos as $pedido)
                <h3 class="pull-left">Cod. Pedido {{ $pedido->id }}</h3>
                <span class="pull-right">Número Voucher: <span style="color:red; font-size:26px;" ><strong>{{ $pedido->id . $pedido->created_at->format('i') . $pedido->created_at->format('s') }}</strong></span></span>
                <!-- Informar grid meus pedidos -->
                <div class="table-responsive">
                    <table class="table checkout-table">
                        <thead>
                        <tr>
                            <th class="table-title">Nome produto</th>
                            <th class="table-title">Código produto</th>
                            <th class="table-title">Status</th>
                            <th class="table-title">Preço un</th>
                            <th class="table-title">Quantidade</th>
                            <th class="table-title">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <input type="hidden" value="{{ $pratosDosPedidos = $pedidosPratos->where('id_pedido', $pedido->id)->get() }}" />
                        <!-- Informar dados dos meus pedidos -->
                        @foreach($pratosDosPedidos as $pratoPedido)
                        <tr>
                            <td class="item-name-col">
                                <figure>
                                    <a href="#"><img src="{{ asset('/site/images/homeslider/prato'. $pratoPedido->id_prato .'.png') }}"
                                                     alt="{{ '' }}"></a>
                                </figure>
                                <header class="item-name">
                                    <a href="#">{{ $prato->find($pratoPedido->id_prato)->descricao }}</a>
                                </header>
                                <ul>
                                    <li>
                                        {{$nacao->find($prato->find($pratoPedido->id_prato)->id_nacao)->nome}}
                                    </li>
                                    <li>
                                        {{$nacao->find($prato->find($pratoPedido->id_prato)->id_nacao)->descricao}}
                                    </li>
                                </ul>

                            </td>
                            <td class="item-code">
                                {{ $pratoPedido->id_prato }}
                            </td>

                            <td class="red text-center">
                                Pendente
                            </td>

                            <td class="item-price-col">
                                <span class="item-price-special">
                                    R$ {{ number_format($prato->find($pratoPedido->id_prato)->valor, 2) }}
                                </span>
                            </td>

                            <td class="item-price-col">
                                <div class="item-price-special">
                                    {{ $pratoPedido->qnt }}
                                </div>
                            </td>
                            <td class="item-total-col">
                                <span class="item-price-special">
                                    R$ {{ number_format($pratoPedido->qnt * $prato->find($pratoPedido->id_prato)->valor, 2) }}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="checkout-total-title" colspan="4">
                                <strong>
                                    TOTAL:
                                </strong>
                            </td>
                            <td class="checkout-total-price cart-total">
                                <strong>
                                    R$ {{ number_format($pedido->valor, 2) }}
                                </strong>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <hr>
                <div class="xs-margin"></div>
                @endforeach

                <div class="xlg-margin"></div>
            </div>
            @endif
        </div>
    </div>
</section>
@stop