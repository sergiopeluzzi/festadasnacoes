@extends('site.modelo')

@section('body')

    <!-- Informar menu localização página -->
    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Início</a></li>
                    <li class="active">Contato</li>
                </ul>
            </div>
        </div>

        <!-- Informar titulo div -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title"><h1 class="title">Contato</h1>

                        <p class="title-desc">
                            Dúvida ou sugestão fique a vontade para comentar.
                        </p>
                    </header>
                    <div class="xs-margin"></div>
                    <div class="row">

                        <!-- Informar comentário -->
                        <div class="col-md-8 col-sm-8 col-xs-12"><h2 class="sub-title">DEIXE UM COMENTÁRIO</h2>

                            <div class="row">

                                <!-- Informar dados para o comentário -->
                                <form action="#" id="contact-form">
                                    <div class="col-md-6 col-sm-12 col-xs-12">

                                        <!-- Informar nome comentário -->
                                        <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon"><i class="fa fa-user"></i></span><span
                                                        class="input-text">Nome</span></span>
                                            <input type="text" name="contact-name" id="contact-name" required
                                                   class="form-control input-lg" placeholder="Seu Nome">
                                        </div>

                                        <!-- Informar e-mail comentário -->
                                        <div class="input-group"><span class="input-group-addon"><span
                                                        class="input-icon"><i class="fa fa fa-envelope"></i></span><span
                                                        class="input-text">E-mail</span></span>
                                            <input type="email" name="contact-email" id="contact-email" required
                                                   class="form-control input-lg" placeholder="Seu e-mail">
                                        </div>

                                        <!-- Informar assunto comentário -->
                                        <div class="input-group"><span class="input-group-addon">
                                        <span class="input-icon"><i class="fa fa-comment"></i></span>
                                        <span class="input-text">Assunto</span></span>
                                            <input type="text" name="contact-subject" id="contact-subject" required class="form-control input-lg" placeholder="Assunto">
                                        </div>
                                        <p class="item-desc">Fique tranquilo, seu endereço de e-mail não será pulicado.</p>
                                    </div>

                                    <!-- Informar texto para o comentário -->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-group textarea-container"><span
                                                    class="input-group-addon"><span
                                                        class="input-icon"><i class="fa fa-pencil"></i></span><span class="input-text">Seu comentário</span></span>
                                        <textarea
                                                name="contact-message" id="contact-message" class="form-control"
                                                cols="30" rows="6" placeholder="Sua mensagem">
                                        </textarea>
                                        </div>
                                        <input type="submit" value="ENVIAR" class="btn btn-custom-2 md-margin">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Informar contato para atendimento -->
                        <div class="col-md-4 col-sm-4 col-xs-12"><h2 class="sub-title">CONTATOS</h2>
                            <ul class="contact-details-list">
                                <li><span class="contact-icon contact-icon-phone"></span>
                                    <ul>
                                        <li>69 3441 5237</li>
                                        <li>69 3441 1111</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-mobile"></span>
                                    <ul>
                                        <li>69 8448 2693</li>
                                        <li>69 8484 8484</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-email"></span>
                                    <ul>
                                        <li>futprdiego@gmail.com</li>
                                        <li>bugao7@gmail.com</li>
                                    </ul>
                                </li>
                                <li><span class="contact-icon contact-icon-skype"></span>
                                    <ul>
                                        <li>diego.iel.cacoal</li>
                                        <li>bugao7.cacoal</li>
                                    </ul>
                                </li>
                            </ul>
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