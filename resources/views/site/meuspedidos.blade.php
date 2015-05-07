@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Início</a></li>
                <li class="active">Meus pedidos</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Informar meus pedidos -->
                <header class="content-title"><h1 class="title">Meus pedidos</h1>
                    <p class="title-desc">Segue abaixo os pedidos realizados por: </p>
                </header>
                <div class="xs-margin"></div>

                <!-- Informar grid meus pedidos -->
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

                        <!-- Informar dados dos meus pedidos -->
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
                                <div class="custom-quantity-input">
                                    <input type="text" name="quantidade" id="quantidade1" value="1">
                                    <a onclick="mais('quantidade1')" class="quantity-btn quantity-input-up">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a onclick="menos('quantidade1')" class="quantity-btn quantity-input-down">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="item-total-col"><span
                                        class="item-price-special">$1175</span>
                                <a href="#" class="close-button" ><i class="fa fa-times fa-lg" ></i></a>
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

                <div class="xlg-margin"></div>
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