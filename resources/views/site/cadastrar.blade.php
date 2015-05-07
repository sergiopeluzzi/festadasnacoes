@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Início</a></li>
                <li class="active">Cadastrar usuário</li>
            </ul>
        </div>
    </div>

    <!-- Informar cadastrar usuário -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <div class="title-bg">
                        <h2 class="title"> Cadastrar usuário</h2>
                    </div>
                    <p>Se você já é cadastrado, por favor, faça o seu <a href="#" data-toggle="modal" data-target="#modal-login-form">login</a>.</p>
                    <P>Apenas os campos com * são obrigatórios</P>
                </header>
                <div class="xs-margin"></div>

                <!-- Informar dados para cadastro -->
                {!! Form::open(['id' => 'cadastrocliente', 'url' => 'cadastrar']) !!}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">PREENCHA OS DADOS</h2>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <span class="input-text">Nome&#42;</span>
                                    </span>
                                    <input id="nome" type="text" required class="form-control input-lg" placeholder="Seu nome">
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon"><i class="fa fa-envelope"></i></span><span class="input-text">E-mail&#42;</span></span>
                                    <input id="email" type="email" required class="form-control input-lg"
                                           placeholder="Seu e-mail">
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon"><i class="fa fa-lock"></i></span><span class="input-text">Senha&#42;</span></span>
                                    <input id="senha" type="password" required class="form-control input-lg"
                                           placeholder="Sua senha">
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon"><i class="fa fa-list"></i></span><span class="input-text">CPF</span></span>
                                    <input id ="cpf" type="text" class="form-control input-lg" placeholder="Seu CPF">
                                </div>

                                <div class="input-group"><span class="input-group-addon"><span
                                                class="input-icon"><i class="fa fa-mobile fa-2x"></i></span><span class="input-text">Telefone</span></span>
                                    <input id="telefone" type="text" class="form-control input-lg" placeholder="Seu telefone">
                                </div>
                                <input type="submit" value="ENVIAR" class="btn btn-custom-2 md-margin">
                            </fieldset>

                        </div>

                        <h2 class="sub-title">FORMAS DE PAGAMENTO</h2>

                        <!--Informar meio de pagamento -->
                        <div class="col-md-6 col-sm-6 col-xs-12 service-box-container">
                            <img src="images/pagseguro.png" data-href="https://pagseguro.uol.com.br/">
                            <div class="services-box">
                                <h3><a href="https://pagseguro.uol.com.br/" target="_blank">PagSeguro</a> <span class="small-bottom-border"></span></h3>
                                <p>Parcele em até 12x, o pagamento no cartão de crédito garante a você a compra dos produtos totalmente on-line, simples e rápido.</p>
                            </div>
                        </div>

                    </div>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- Informar cardápio -->
        <div class="container">
            <div class="similiar-items-container carousel-wrapper">
                <header class="content-title">
                    <div class="title-bg"><h2 class="title">Cardápio</h2></div>
                    <p class="title-desc">Escolha os seus pratos, sinta os sabores ao redor do mundo bem pertinho de você</p>
                </header>
                <div class="carousel-controls" >
                    <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev" ></div>
                    <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                </div>
                <div class="similiar-items-slider owl-carousel">

                    <!-- Informar produto brasil -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_brasil.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 10,00</span></div>
                            <span class="new-rect">Brasil</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_brasil.html">Espetinho de Ganso</a></h3>
                            <div class="item-action"><a href="#" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- informar produto eua -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_eua.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 15,00</span></div>
                            <span class="new-rect">Eua</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_eua.html">Lanche Americano</a></h3>
                            <div class="item-action"><a href="produto_eua.html" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Informar produto itália-->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_italia.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 25,00</span></div>
                            <span class="new-rect">Itália</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_italia.html">Macarronada</a></h3>
                            <div class="item-action"><a href="#" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Informar produto irlanda -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_irlanda.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 8,00</span></div>
                            <span class="new-rect">Irlanda</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_irlanda.html">Lanche Americano</a></h3>
                            <div class="item-action"><a href="#" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Informar produto méxico -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_mexico.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 3,50</span></div>
                            <span class="new-rect">México</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_mexico.html">Tortilha</a></h3>
                            <div class="item-action"><a href="#" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>

                    <!-- Informar produto bebidas -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_bebida.html"><img
                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                            class="item-image-hover"></a></figure>
                            <div class="item-price-container"><span class="item-price">R$ 3,00</span></div>
                            <span class="new-rect">Bebidas</span>
                        </div>
                        <div class="item-meta-container">
                            <h3 class="item-name"><a href="produto_bebida.html">Refrigerante Lata 250ml</a></h3>
                            <div class="item-action"><a href="#" class="item-add-btn">
                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop