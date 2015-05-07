@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Início</a></li>
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
                <form action="#" id="checkout-form">
                    <div class="panel-group custom-accordion" id="checkout">
                        <div class="panel">

                            <!-- Informar o passo 1 -->
                            <div class="accordion-header">
                                <div class="accordion-title">1 Passo: <span>Login Cliente</span></div>
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
                                            <a href="cadastrar_usuario.html"><button type="button" class="btn btn-custom-3 btn-sm">Cadastre-se</button></a>

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

                        <!-- Informar passo 2 -->
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">2 Passo: <span>Forma de Pagamento</span></div>
                                <a class="accordion-btn" data-toggle="collapse" data-target="#payment-method"></a>
                            </div>
                            <div id="payment-method" class="collapse">
                                <div class="panel-body">
                                    <p>O método disponível para pagamento é o <a href="https://pagseguro.uol.com.br/comprar/">PagSeguro</a>, simples e fácil. </p>
                                    <img src="images/pagseguro.png">
                                </div>
                            </div>
                        </div>

                        <!-- Informar passo 3 -->
                        <div class="panel">
                            <div class="accordion-header">
                                <div class="accordion-title">3 Passo: <span>Confirmar Pedido</span></div>
                                <a class="accordion-btn opened" data-toggle="collapse" data-target="#confirm"></a>
                            </div>
                            <div id="confirm" class="collapse in">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table checkout-table">
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
                                            <tr>
                                                <td class="item-name-col">
                                                    <figure><a href="#"><img src="images/products/compare1.jpg"
                                                                             alt="Lowlands Lace Blouse"></a>
                                                    </figure>
                                                    <header class="item-name"><a href="#">Lowlands Lace Blouse</a>
                                                    </header>
                                                    <ul>
                                                        <li>Color: White</li>
                                                        <li>Size: SM</li>
                                                    </ul>
                                                </td>
                                                <td class="item-code">MP125984154</td>
                                                <td class="item-price-col"><span
                                                            class="item-price-special">$1175</span></td>
                                                <td>
                                                    <div class="custom-quantity-input"><input type="text"
                                                                                              name="quantity"
                                                                                              value="1"> <a href="#"
                                                                                                            onclick="return!1"
                                                                                                            class="quantity-btn quantity-input-up"><i
                                                                    class="fa fa-angle-up"></i></a> <a href="#"
                                                                                                       onclick="return!1"
                                                                                                       class="quantity-btn quantity-input-down"><i
                                                                    class="fa fa-angle-down"></i></a></div>
                                                </td>
                                                <td class="item-total-col"><span
                                                            class="item-price-special">$1175</span> <a href="#" class="close-button"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="item-name-col">
                                                    <figure><a href="#"><img src="images/products/compare2.jpg"
                                                                             alt="Samsung Galaxy Ace"></a></figure>
                                                    <header class="item-name"><a href="#">Samsung Galaxy Ace</a>
                                                    </header>
                                                    <ul>
                                                        <li>Color: Black</li>
                                                        <li>Size: XL</li>
                                                    </ul>
                                                </td>
                                                <td class="item-code">MP125984154</td>
                                                <td class="item-price-col"><span
                                                            class="item-price-special">$1475</span></td>
                                                <td>
                                                    <div class="custom-quantity-input"><input type="text"
                                                                                              name="quantity"
                                                                                              value="1"> <a href="#"
                                                                                                            onclick="return!1"
                                                                                                            class="quantity-btn quantity-input-up"><i
                                                                    class="fa fa-angle-up"></i></a> <a href="#"
                                                                                                       onclick="return!1"
                                                                                                       class="quantity-btn quantity-input-down"><i
                                                                    class="fa fa-angle-down"></i></a></div>
                                                </td>
                                                <td class="item-total-col"><span
                                                            class="item-price-special">$1475</span> <a href="#" class="close-button"></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td class="checkout-total-title" colspan="4"><strong>TOTAL:</strong>
                                                </td>
                                                <td class="checkout-total-price cart-total"><strong>$434.50</strong>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="lg-margin"></div>
                                    <div class="text-right"><input type="submit" class="btn btn-custom-2" value="Confirmar pedido"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="xlg-margin"></div>
            </div>
        </div>
    </div>
</section>

@stop