@extends('site.modelo')

@section('body')

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Início</a></li>
                    <li class="active">Minha conta</li>
                </ul>
            </div>
        </div>

        <!-- Informar cadastrar usuário -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title">
                        <div class="title-bg">
                            <h2 class="title">Minha conta</h2>
                        </div>

                        <p>Verifique os seus dados, é importante para segurança do seu pedido</p>
                    </header>
                    <div class="xs-margin"></div>

                    <!-- Informar dados para cadastro -->
                    <form action="#" id="register-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset><h2 class="sub-title">DADOS DO CLIENTE</h2>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"> <i class="fa fa-user"></i></span><span class="input-text">Nome</span></span>
                                        <input type="text" required class="form-control input-lg"
                                               placeholder="Seu nome">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-envelope"></i></span><span class="input-text">E-mail</span></span>
                                        <input type="email" required class="form-control input-lg"
                                               placeholder="Seu e-mail">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-lock"></i></span><span class="input-text">Senha</span></span>
                                        <input type="password" required class="form-control input-lg"
                                               placeholder="Sua senha">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-list"></i></span><span class="input-text">CPF</span></span>
                                        <input type="text" class="form-control input-lg" id="cpf" placeholder="Seu CPF">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-mobile fa-2x"></i></span><span class="input-text">Telefone</span></span>
                                        <input type="text" class="form-control input-lg" id="telefone" placeholder="Seu telefone">
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

                    </form>
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

                        <!-- Informar produto 5 -->
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

                        <!-- Informar produto 6 -->
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

    <!-- Informar rodapé principal -->
    <footer id="footer">
        <div id="newsletter-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 clearfix"><h3>Receba as notícias da FESTA DAS NAÇÕES</h3>

                        <!-- informar e-mail para notícias da festa -->
                        <form id="register-newsletter">
                            <input type="text" name="newsletter" required="" placeholder="E-mail">
                            <input type="email" class="btn btn-custom-3" value="INSCREVA-SE">
                        </form>
                    </div>
                </div> <!-- fim div linha -->
            </div> <!-- fim div container -->
        </div> <!-- fim div noticias container -->

        <!-- Acessar informações gerais -->
        <div id="inner-footer">
            <div class="container">
                <div class="row">

                    <!-- Informar acesso a minha conta -->
                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3>DÚVIDAS</h3>
                        <ul class="links">
                            <li> <a href="meus_pedidos.html">Meus pedidos</a></li>
                            <li><a href="minha_conta.html">Minha conta</a></li>
                            <li><a href="contato.html">Sugestões</a></li>
                        </ul>
                    </div>

                    <!-- Informar acesso as informações da página -->
                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3> INFORMAÇÕES </h3>
                        <ul class="links">
                            <li><a href="index.html#festa_principal">A Festa</a></li>
                            <li><a href="https://www.facebook.com/pages/Millenium/558733344212135?rf=234786046680210"target="_blank">Local do evento</a></li>
                            <li><a href="index.html#cardapio_principal">Cardápio</a></li>
                            <li><a href="index.html#patrocinadores_principal">Patrocinadores</a></li>
                        </ul>
                    </div>

                    <!-- Informar dados sobre a organizadora do evento -->
                    <div class="col-md-3 col-sm-4 col-xs-12 widget">
                        <h3> ORGANIZAÇÃO </h3>
                        <ul class="contact-list">
                            <li><strong>IGREJA EVANGÉLICA SHEKINA</strong>
                            </li>
                            <li>Brasil</li>
                            <li>Rondônia</li>
                            <li>Cacoal</li>
                            <li>Rua da Igreja 546 - Princesa Izabel</li>
                            <li>Aberto de: Seg. - Sex.</li>
                            <li>Nos horários: 8.00AM - 18.00PM</li>
                        </ul>
                    </div>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-3 col-sm-12 col-xs-12 widget">
                        <h3>FACEBOOK</h3>
                        <div class="facebook-likebox">
                            <div class="fb-like"
                                 data-href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts"&amp;
                                 data-width="80"&amp; data-layout="standard"&amp; data-colorscheme="dark" &amp;
                                 data-action="like"&amp; data-show-faces="true"&amp; data-share="false">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Informar icones rodapé -->
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                        <ul class="social-links clearfix">
                            <li>
                                <a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?ref=br_rs"
                                   target="_blank" class="social-icon icon-facebook">
                                </a>
                            </li>
                            <li><a href="http://www.skype.com/pt-br/" target="_blank" class="social-icon icon-skype"></a></li>
                            <li><a href="mailto:igreja_shekina@gmail.com" target="_blank" class="social-icon icon-email"></a></li>
                        </ul>
                    </div>

                    <!-- Informar sobre empresa desenvolvedora -->
                    <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                        <p>&copy; 2015 us.E Tecnologia&trade;. Direitos Reservados.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- fim rodapé -->

    <!-- Informar elementos modal Login-->
    <div class="modal fade" id="modal-login-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
         aria-hidden="true" style="display: none;">
        <form id="login-form" method="get" action="#">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                                    class="sr-only">Sair</span></button>
                        <h4 class="modal-title" id="myModalLabel1">Entrar</h4>
                    </div>
                    <!-- Fim do modal header-->
                    <div class="modal-body">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span
                                        class="input-text"><i class="fa fa-envelope"></i> E-mail</span></span>
                            <input type="email" required="" class="form-control input-lg" placeholder="Seu e-mail">
                        </div>
                        <!-- Fim  do input group-->
                        <div class="input-group">
                            <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span
                                        class="input-text"><i class="fa fa-lock fa-2x"></i> Senha</span></span>
                            <input type="password" required="" class="form-control input-lg" placeholder="Sua senha">
                        </div>
                        <!-- Fim do input group -->

                        <span class="help-block text-right"><a href="#">Esqueceu sua senha?</a></span>

                        <div class="input-group custom-checkbox sm-margin top-10px"><input
                                    type="checkbox"> <span class="checbox-container"><i
                                        class="fa fa-check"></i></span>Lembrar-me
                        </div>
                    </div><!-- Fim do .modal body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-custom" data-dismiss="modal">CANCELAR</button>
                        <button class="btn btn-custom-2">ENVIAR</button>
                    </div> <!-- Fim do .modal-footer -->
                </div><!-- Fim do .modal-content -->
            </div><!-- Fim do .modal-dialog -->
        </form> <!-- fim form modal login -->
    </div> <!-- fim div modal -->
@stop