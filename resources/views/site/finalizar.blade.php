@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Início</a></li>
                <li class="active">Finalizar Pedido</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Informar passos para finalizar pedido -->
                <header class="content-title"><h1 class="title">Finalizar Pedido</h1>
                    <p class="title-desc">Siga os passos abaixo para finalizar o pedido</p>
                </header>
                <div class="xs-margin"></div>
                {!! Form::open(['id' => 'checkout-form', 'route' => 'site.finalizar.fechar']) !!}
                    <div class="panel-group custom-accordion" id="checkout">
                        @if(Auth::guest())
                        <div class="panel">
                            <!-- Informar o passo 1 -->
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Login Cliente</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse"
                                   data-target="#checkout-option">
                                </a>
                            </div>

                            <!-- Informar conteúdo do passo 1 -->
                            <div id="checkout-option" class="collapse in">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">Cliente Novo</h2>
                                            <p>Cadastre-se para finalizar o pedido, é bem simples:</p>
                                            <div class="xs-margin"></div>

                                            <p>ao cadastrar-se na festa das nações, você terá acesso a compra dos pratos
                                                e bebidas disponíveis no cardápio, e receber as notícias desse maravilhoso evento.</p>
                                            <a href="/cadastrar"><button type="button" class="btn btn-custom-3 btn-sm">Cadastre-se</button></a>

                                            <div class="md-margin"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12"><h2 class="checkout-title">Clientes</h2>

                                            <p>Caso possua uma conta, por favor faça o seu Login.</p>

                                            <div class="xs-margin"></div>
                                            <div class="input-group"><span class="input-group-addon"><span
                                                            class="input-icon"><i class="fa fa-envelope"></i></span><span
                                                            class="input-text">E-mail</span></span> <input type="email" required class="form-control input-lg" placeholder="Seu e-mail">
                                            </div>
                                            <div class="input-group xs-margin"><span class="input-group-addon"><span
                                                            class="input-icon"><i class="fa fa-lock"></i></span><span
                                                            class="input-text">Senha</span></span> <input
                                                        type="password" required class="form-control input-lg"
                                                        placeholder="Sua senha"></div>
                                            <span class="help-block text-right"><a href="#">Esqueceu sua senha?</a></span>

                                            <div class="input-group custom-checkbox sm-margin top-10px"><input
                                                        type="checkbox"> <span class="checbox-container"><i
                                                            class="fa fa-check"></i></span>Lembrar senha
                                            </div>
                                            <a href="#" class="btn btn-custom-2">Continuar</a></div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        @else
                        <!-- Informar passo 2 -->
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Forma de Pagamento</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#payment-method"></a>
                            </div>
                            <div id="payment-method" class="collapse" align="center">
                                <div class="panel-body">
                                    <p>O método disponível para pagamento é o <a href="https://pagseguro.uol.com.br/comprar/">PagSeguro</a>, simples e fácil. </p>
                                    <img src="{{asset('site/images/pagseguro.png')}}">
                                </div>
                            </div>
                        </div>

                        <!-- Informar passo 3 -->
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title"><span>Confirmar Pedido</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#confirm"></a>
                            </div>
                            <div id="confirm" class="collapse in">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table checkout-table" id="tb_pedido">
                                            <thead>
                                            <tr>
                                                <th class="table-title">Nome produto</th>
                                                <th class="table-title">Código produto</th>
                                                <th class="table-title">Preço un</th>
                                                <th class="table-title">Quantidade</th>
                                                <th class="table-title">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <!-- Informar dados dos produtos no pedido -->
                                            @foreach($carrinho as $item)
                                                <tr>
                                                    <td class="item-name-col">
                                                        <figure>
                                                            <a href="#"><img src="{{ asset('/site/images/homeslider/prato'. $item['sku'] .'.png') }}"
                                                                             alt="{{ $item['description'] }}"></a>
                                                        </figure>
                                                        <header class="item-name">
                                                            <a href="#">{{ $item['description'] }}</a>
                                                        </header>
                                                        <ul>
                                                            <li>
                                                                {{$nacao->find($prato->find($item['sku'])->id_nacao)->nome}}
                                                            </li>
                                                            <li>
                                                                {{$nacao->find($prato->find($item['sku'])->id_nacao)->descricao}}
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="item-code">
                                                        {{ $item['sku'] }}
                                                    </td>

                                                    <td class="item-price-col">
                                                        <span class="item-price-special">
                                                            R$ {{ number_format($item['price'],2) }}
                                                        </span>
                                                    </td>

                                                    <td class="item-price-col">
                                                        <div class="item-price-special">
                                                            {{$item['quantity']}}
                                                        </div>
                                                    </td>

                                                    <td class="item-total-col">
                                                        <span class="item-price-special" >
                                                            R$ <input style="width:70px; text-align: right; border: 0;" readonly="true" type="text" name="vlr" id="vlr_total_{{ $item['sku'] }}" value="{{ number_format($item['price']  * $item['quantity'],2) }}">
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="checkout-total-title" colspan="4"><strong>TOTAL:</strong>
                                                </td>
                                                <td class="checkout-total-price cart-total"><strong>R$ {{ number_format($cart['total'],2) }}</strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="lg-margin"></div>
                                    <div class="text-right">
                                        {!! Form::hidden('dados', null, ['class' => 'form-control']) !!}
                                        {!! Form::submit('Confirmar pedido', ['class' => 'btn btn-custom-2']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                {!! Form::close() !!}
                <div class="xlg-margin"></div>
            </div>
        </div>
    </div>
</section>

@stop