<!DOCTYPE html>

<!-- Início da página em html do projeto Festa das nações

    * Alunos: Diego Reinos Noronha e Sergio Henrique Martins Pelluzi.
    * Orientador: Alberto Ayres Benicio.
-->
<html>

<!-- Cabeçalho da página

    * Importar os arquivos Estilos e JavaScript para a página.
-->
<head>
    <meta charset="utf-8">
    <title> Festa das Nações </title>

    <!-- links estilos -->
    <link rel="stylesheet" href="{{ asset('/site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/colpick.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/revslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/site/images/logofesta.png') }}">

    <!-- scripts -->
    <script src="{{ asset('/site/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/site/js/jquery.maskedinput-1.1.4.pack.js') }}"></script>
</head>

<body>
<div id="wrapper">
    <!-- início header principal -->
    <!-- início header principal -->
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <!-- Informar menu cabeçalho esquerdo -->
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">
                                <li>
                                    <a href="minhaconta" title="Minha conta">
                                        <span class="top-icon"><i class="fa fa-user"></i></span>
                                        <span class="hide-for-xs">Minha conta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="meuspedidos" title="Meus pedidos">
                                        <span class="top-icon"><i class="fa fa-check-square-o"></i></span>
                                        <span class="hide-for-xs">Meus pedidos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="meucarrinho" title="Meu Carrinho">
                                        <span class="top-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="hide-for-xs">Meu carrinho</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="finalizar" title="Finalizar Pedido">
                                        <span class="top-icon"><i class="fa fa-check"></i></span>
                                        <span class="hide-for-xs">Finalizar pedido</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- fim da div conteúdo superior esquerdo -->

                        <!-- Informar menu cabeçalho direito -->
                        <div class="header-top-right">
                            <div class="header-top-dropdowns pull-right"></div>
                            <div class="header-text-container pull-right">
                                <span class="header-link">
                                    @if(Auth::guest())
                                        <a href="#" data-toggle="modal" data-target="#modal-login-form">
                                            <i class="fa fa-users"></i> Entrar</a>
                                        &nbsp;ou&nbsp;
                                        <a href="{{ url('cadastrar') }}"> <i class="fa fa-plus-circle"></i> Cadastre-se</a>
                                    @else
                                        <span>Seja bem-vindo <span style="color:red"><strong>{{ Auth::user()->name }}</strong></span></span>
                                        <span class="pull-right"><a href="{{ url('/auth/logout') }}">( Sair )</a><span>
                                    @endif
                                </span>
                            </div><!-- fim da div conteúdo superior direito -->
                        </div><!-- fim da div superior direito -->
                    </div><!-- fim colunas div-->
                </div><!-- fim linha div -->
            </div><!-- fim do container div -->
        </div> <!-- fim do menu cabeçalho -->

        <!-- Inner cabeçalho -->
        <div id="inner-header">
            <div class="container">
                <div class="row">

                    <!-- Informar logo evento -->
                    <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <a href="/" title="Festa das Nações">
                                <img src="{{ asset('/site/images/logofesta2.jpg') }}" alt="e!" width="238" height="76">
                            </a>
                        </h1>
                    </div>

                    <!-- Informar contatos cabeçalho-->
                    <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
                        <div class="header-box contact-infos pull-right">
                            <ul>

                                <!-- Skype -->
                                <li>
                                <span class="header-box-icon">
                                    <style>
                                        .fa-skype {
                                            color: #ff0000;
                                        }</style><i class="fa fa-skype fa-lg"></i>
                                </span>
                                    igreja_shekina
                                </li>

                                <!-- E-mail -->
                                <li>
                                <span class="header-box-icon">
                                    <style>
                                        .fa-envelope {
                                            color: #FF0000;
                                        }</style><i class="fa fa-envelope fa-lg"></i>
                                    </span>
                                    <a href="mailto:igreja_shekina@gmail.com">igreja_shekina@gmail.com</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Telefone -->
                        <div class="header-box contact-phones pull-right clearfix">
                            <span class="header-box-icon">
                                <style>
                                    .fa-phone {
                                        color: #FF0000;
                                    }</style><i class="fa fa-phone fa-3x"></i></span>
                            <ul class="pull-left">
                                <li>(69) 3441-5237</li>
                                <li>(69) 8448-2693</li>
                            </ul>
                        </div>
                    </div><!-- fim div inner cabeçalho -->
                </div><!-- fim linha div -->
            </div><!-- fim div container -->

            <!-- Informar menu principal -->
            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">
                            <nav id="main-nav">

                                <!-- informar menu inicial -->
                                <div id="responsive-nav">
                                    <div id="responsive-nav-button">Menu<span id="responsive-nav-button-icon"></span></div>
                                </div>
                                <ul class="menu clearfix">

                                    <!-- Menu inicial -->
                                    <li><a class="active" href="/"><i class="fa fa-home fa-lg"></i></a></li>

                                    <!--Menu cardápio -->
                                    <li><a href="/#cardapio_principal">CARDÁPIO</a>
                                        <ul>
                                            <li>
                                                <a href="produto_brasil.html">BRASIL - GOIÁS</a>
                                            </li>
                                            <li>
                                                <a href="produto_eua.html">ESTADOS UNIDOS</a>
                                            </li>
                                            <li>
                                                <a href="produto_italia.html">ITÁLIA</a>
                                            </li>
                                            <li>
                                                <a href="produto_irlanda.html">IRLANDA</a>
                                            </li>
                                            <li>
                                                <a href="produto_mexico.html">MÉXICO</a>
                                            </li>
                                            <li>
                                                <a href="produto_bebida.html">BEBIDAS</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!--menu cadastre-se -->
                                    <li><a href="{{ url('cadastrar') }}">Cadastre-se</a></li>

                                    <!--menu contato -->
                                    <li><a href="{{ url('contato') }}">Contato</a></li>

                                    <!--menu carrinho -->
                                    <li><a href="meucarrinho"><i class="fa fa-shopping-cart fa-lg"></i></a></li>
                                </ul> <!-- fim div elementos -->
                            </nav> <!-- fim div menu principal -->

                            <!--carrinho de compras cabeçalho -->
                            <div id="quick-access">
                                <div class="dropdown-cart-menu-container pull-right">

                                    <!-- div botão carrinho do sistema -->
                                    <div class="btn-group dropdown-cart">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                            <span class="cart-menu-icon"></span>{{$cart['count']}}<span class="drop-price"> - R$ {{ number_format($cart['total'],2) }}</span>
                                        </button>

                                        <!-- Rótulo dos itens carrinho -->
                                        <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                            <p class="dropdown-cart-description">Itens recente(s).</p>
                                            <ul class="dropdown-cart-product-list">
                                                @foreach($carrinho as $item)
                                                <li class="item clearfix">
                                                    <a href="remover/{{ $item['id'] }}" title="Delete item" class="delete-item">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure>
                                                        <a href="product.html"><img src="{{ asset('/site/images/homeslider/prato'. $item['sku'] .'.png') }}" alt="{{ $item['description'] }}"></a>
                                                    </figure>

                                                    <!-- div do conteúdo carrinho cabeçalho -->
                                                    <div class="dropdown-cart-details">
                                                        <p class="item-name">
                                                            <a href="product.html">{{ $item['description'] }}</a>
                                                        </p>

                                                        <!-- conteúdo da div-->
                                                        <p>{{ $item['quantity'] }}x R$<span class="item-price"> {{ number_format($item['price'],2) }}</span></p>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>

                                            <!-- div total do carrinho cabeçalho -->
                                            <ul class="dropdown-cart-total">
                                                <li>
                                                    <span class="dropdown-cart-total-title">Total:</span>R$ {{ number_format($cart['total'],2) }}
                                                </li>
                                            </ul>

                                            <!-- botões do carrinho total -->
                                            <div class="dropdown-cart-action">
                                                <p><a href="meucarrinho" class="btn btn-custom-2 btn-block">Carrinho</a></p>
                                                <p><a href="finalizar" class="btn btn-custom btn-block">Finalizar</a></p>
                                            </div>
                                        </div><!-- fim div carrinho cabeçalho direito -->
                                    </div><!-- fim div botão carrinho cabeçalho direito -->
                                </div><!-- fim div container carrinho cabeçalho direito -->
                            </div><!-- fim div quick acess -->
                        </div><!-- fim div colunas carrinho -->
                    </div><!-- fim div linha -->
                </div><!-- fim div container -->
            </div><!-- fim div container nav -->
        </div><!-- fim div inner header-->
    </header> <!-- fim da div header -->

@yield('body')

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
                        <li> <a href="{{ url('meuspedidos') }}">Meus pedidos</a></li>
                        <li><a href="{{ url('minhaconta') }}">Minha conta</a></li>
                        <li><a href="{{ url('cadastrar') }}">Sugestões</a></li>
                    </ul>
                </div>

                <!-- Informar acesso as informações da página -->
                <div class="col-md-3 col-sm-4 col-xs-12 widget">
                    <h3> INFORMAÇÕES </h3>
                    <ul class="links">
                        <li><a href="/#festa_principal">A Festa</a></li>
                        <li><a href="https://www.facebook.com/pages/Millenium/558733344212135?rf=234786046680210" target="_blank">Local do evento</a></li>
                        <li><a href="/#cardapio_principal">Cardápio</a></li>
                        <li><a href="/#patrocinadores_principal">Patrocinadores</a></li>
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
                             data-href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" &amp;
                             data-width="80" &amp; data-layout="standard" &amp; data-colorscheme="dark" &amp;
                             data-action="like" &amp; data-show-faces="true" &amp; data-share="false">
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
    <form id="login-form" method="POST" action="{{ url('/auth/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                        <input type="email" required="" class="form-control input-lg" placeholder="Seu e-mail" name="email" value="{{ old('email') }}">
                    </div>
                    <!-- Fim  do input group-->
                    <div class="input-group">
                            <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span
                                        class="input-text"><i class="fa fa-lock fa-2x"></i> Senha</span></span>
                        <input type="password" required="" class="form-control input-lg" placeholder="Sua senha" name="password">
                    </div>
                    <!-- Fim do input group -->

                    <span class="help-block text-right"><a href="#">Esqueceu sua senha?</a></span>

                    <div class="input-group custom-checkbox sm-margin top-10px">
                        <input type="checkbox" name="remember"><span class="checbox-container"><i class="fa fa-check"></i></span>Lembrar-me
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
</body>
<footer>
    <!-- Importar facebook organizador -->
    <script>(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    </div> <!-- fim div conteudo -->

    <!-- script login -->
    <script>
        $(function () {
            jQuery("#slider-rev").revolution({
                delay: 8e3,
                startwidth: 1170,
                startheight: 600,
                onHoverStop: "true",
                hideThumbs: 250,
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 0,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 0,
                soloArrowRightVOffset: 0,
                touchenabled: "on",
                stopAtSlide: -1,
                stopAfterLoops: -1,
                dottedOverlay: "none",
                fullWidth: "on",
                spinned: "spinner5",
                shadow: 0,
                hideTimerBar: "on"
            })
        });
    </script>

    <script type="text/javascript">$("#cpf").mask("999.999.999-99")</script>
    <script type="text/javascript">$("#telefone").mask("(99) 9999-9999")</script>

    <!-- Disponibiliar botão rolagem cabeçalho -->
    <a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a>

    <!-- scripts carrosel -->
    <script src="{{ asset('/site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/site/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.debouncedresize.js') }}"></script>
    <script src="{{ asset('/site/js/retina.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('/site/js/twitter/jquery.tweet.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('/site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/site/js/jflickrfeed.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/site/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/site/js/colpick.j') }}s"></script>
    <script src="{{ asset('/site/js/main.js') }}"></script>

    @yield('sectionFront')

    /**
     * Aumentar e diminir quantidade produto.
     */
    <script type="text/javascript">
        function id( el ){
            return document.getElementById( el );
        }
        function menos( id_qnt )
        {
            var qnt = parseInt( id( id_qnt ).value );
            if( qnt > 1 )
                id( id_qnt ).value = qnt - 1;
        }
        function mais( id_qnt )
        {
            id( id_qnt ).value = parseInt( id( id_qnt ).value ) + 1;
        }

        function atualizaValor(id_preco, id_qnt, id_preco_total)
        {
            id(id_preco_total).value = parseFloat(id(id_qnt).value * id(id_preco).value) + '.00';
        }
    </script>

</footer>

</html>