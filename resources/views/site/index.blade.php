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
    <link rel="icon" type="image/png" href="images/icons/icon.html') }}">

    <!-- scripts -->
    <script src="{{ asset('/site/js/jquery-1.11.1.min.js') }}"></script>
</head>

<!-- Corpo da página do projeto -->
<body>

<!-- div principal-->
<div id="wrapper">

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
                                    <a href="minha_conta.html" title="Minha conta">
                                        <span class="top-icon"><i class="fa fa-user"></i></span>
                                        <span class="hide-for-xs">Minha conta</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="meus_pedidos.html" title="Meus pedidos">
                                        <span class="top-icon"><i class="fa fa-check-square-o"></i></span>
                                        <span class="hide-for-xs">Meus pedidos</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="carrinho.html" title="carrinho">
                                        <span class="top-icon"><i class="fa fa-shopping-cart"></i></span>
                                        <span class="hide-for-xs">Meu carrinho</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="finalizar.html" title="Finalizar Pedido">
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
                                <p class="header-text"> Seja bem-vindo! </p>
                                <p class="header-link">
                                    <a href="#" data-toggle="modal" data-target="#modal-login-form">
                                        <i class="fa fa-users"></i> Entrar</a>
                                    &nbsp;ou&nbsp;
                                    <a href="cadastrar_usuario.html"> <i class="fa fa-plus-circle"></i> Cadastre-se</a>
                                </p>
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
                                <img src="{{ asset('/site/images/logofesta.jpg') }}" alt="e!" width="238" height="76">
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
                                    <li><a href="#">CARDÁPIO</a>
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
                                    <li><a href="admin/clientes/create">Cadastre-se</a></li>

                                    <!--menu contato -->
                                    <li><a href="contato.html">Contato</a></li>

                                    <!--menu carrinho -->
                                    <li><a href="carrinho.html"><i class="fa fa-shopping-cart fa-lg"></i></a></li>
                                </ul> <!-- fim div elementos -->
                            </nav> <!-- fim div menu principal -->

                            <!--carrinho de compras cabeçalho -->
                            <div id="quick-access">
                                <div class="dropdown-cart-menu-container pull-right">

                                    <!-- div botão carrinho do sistema -->
                                    <div class="btn-group dropdown-cart">
                                        <button type="button" class="btn btn-custom dropdown-toggle" data-toggle="dropdown">
                                            <span class="cart-menu-icon"></span>2 item(s)<span class="drop-price"> - R$998,99</span>
                                        </button>

                                        <!-- Rótulo dos itens carrinho -->
                                        <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                            <p class="dropdown-cart-description">Itens recente(s).</p>
                                            <ul class="dropdown-cart-product-list">
                                                <li class="item clearfix">
                                                    <a href="#" title="Delete item" class="delete-item">
                                                        <i class="fa fa-times"></i>
                                                    </a>
                                                    <figure>
                                                        <a href="product.html"><img src="{{ asset('/site/images/products/thumbnails/item12.jpg') }}" alt="phone 4"></a>
                                                    </figure>

                                                    <!-- div do conteúdo carrinho cabeçalho -->
                                                    <div class="dropdown-cart-details">
                                                        <p class="item-name">
                                                            <a href="product.html">Cam Optia AF Webcam</a>
                                                        </p>

                                                        <!-- conteúdo da div-->
                                                        <p>1x<span class="item-price">R$499<span class="sub-price">.00</span></span></p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <!-- div total do carrinho cabeçalho -->
                                            <ul class="dropdown-cart-total">
                                                <li>
                                                    <span class="dropdown-cart-total-title">Total:</span>R$998<span class="sub-price">.99</span>
                                                </li>
                                            </ul>

                                            <!-- botões do carrinho total -->
                                            <div class="dropdown-cart-action">
                                                <p><a href="carrinho.html" class="btn btn-custom-2 btn-block">Carrinho</a></p>
                                                <p><a href="finalizar.html" class="btn btn-custom btn-block">Finalizar</a></p>
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

    <!--Informar seção da home-->
    <section id="content">

        <!--Informar carrosel principal-->
        <div id="slider-rev-container">
            <div id="slider-rev">
                <ul>

                    <!--Informar a festa-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/foto_festa.jpg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            FESTA DAS NAÇÕES
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="blue">Uma experiência ao redor do mundo
                                <br>
                                bem perto de Você!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="#festa_principal" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/slide1_1.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Informar pedido-->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="600"
                        data-saveperformance="on" data-title="Learn More">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg2"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="755" data-y="238" data-speed="1600"
                             data-start="750" data-endspeed="300">
                            FAÇA SEU PEDIDO
                        </div>
                        <div class="tp-caption rev-text2 lfr ltr" data-x="755" data-y="290" data-speed="1600"
                             data-start="1050" data-endspeed="550">
                            Agora é fácil!
                            <br>
                            E xperimente todos os nossos pratos!
                        </div>
                        <div class="tp-caption lfr ltr" data-x="755" data-y="360" data-speed="1600"
                             data-start="1350" data-endspeed="800">
                            <a href="#" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption rev-price randomrotate randomrotateout" data-x="360"
                             data-y="55" data-speed="1200" data-start="2000" data-endspeed="400">
                            <i class="fa fa-credit-card fa-3x"></i>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="center" data-hoffset="-204"
                             data-speed="1750" data-start="400" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/slide2_2.png') }}" alt="Slide 2_2">
                        </div>
                        <div class="tp-caption lfr ltr" data-x="380" data-y="50" data-speed="1800"
                             data-start="250" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/slide2_1.png') }}" alt="Slide 2_1">
                        </div>
                    </li>

                    <!-- Informar nação goias-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira_brasil.jpg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            <font color="#ff7f50">BRASIL</font> <font color="blue">GOIÁS</font>
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="white"> A comida de Goiana é
                                <br>
                                bem empolgante!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="produto_brasil.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/goianaOK.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Informar nação estados unidos-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira_eua.jpg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            <font color="#FF0000">ESTADOS</font>
                            <font color="#0000FF">UNIDOS</font>
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="white">Manow tudo que veio da terra
                                <br>
                                do BATMAN é bom!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="produto_eua.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/whopper-3-queijos.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Informar nação italia-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira_italia.jpeg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            <font color="blue">ITÁLIA</font>
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="#fffaf0">Afinal quem não gosta do Mario!
                                <br>
                                o encanador italiano!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="produto_italia.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/italia.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Informar nação irlanda-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira_irlanda.jpg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            <font color="#008000">IRLANDA</font>
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="#696969">Fique esperto, pois
                                <br>
                                os leprechaus estão soltos por lá!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="produto_irlanda.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/goianaOK.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Informar nação mexico-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on" data-title="Special Offers">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira_mexico.jpg') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="198" data-speed="1600"
                             data-start="300" data-endspeed="300">
                            <font color="white">MÉXICO</font>
                        </div>
                        <div class="tp-caption rev-text lfr ltr" data-x="695" data-y="252" data-speed="1600"
                             data-start="600" data-endspeed="550">
                            <font color="#FFD700">Anda LE Anda LE!
                                <br>
                                sábio Speedy González!</font>
                        </div>
                        <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="produto_mexico.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/homeslider/goianaOK.png') }}" alt="Slide 1_1">
                        </div>
                    </li>

                    <!-- Acessar contato -->
                    <li data-transition="fade" data-slotamount="4" data-masterspeed="600"
                        data-saveperformance="on" data-title="More Features">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg3"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption sfr str" data-x="24" data-y="bottom" data-speed="900"
                             data-start="500" data-endspeed="300">
                            <img src="{{ asset('/site/images/homeslider/slide3_1.png') }}" alt="Slide 3_1">
                        </div>
                        <div class="tp-caption sfl stl" data-x="788" data-y="95" data-speed="1000"
                             data-start="1200" data-endspeed="540">
                            <img src="{{ asset('/site/images/homeslider/slide3_3.png') }}" alt="Slide 3_3">
                        </div>
                        <div class="tp-caption sfl stl" data-x="700" data-y="260" data-speed="800"
                             data-start="800" data-endspeed="420">
                            <img src="{{ asset('/site/images/homeslider/slide3_2.png') }}" alt="Slide 3_2">
                        </div>
                        <div class="tp-caption sfl stl" data-x="613" data-y="325" data-speed="600"
                             data-start="400" data-endspeed="300">
                            <img src="{{ asset('/site/images/homeslider/slide3_4.png') }}" alt="Slide 3_4">
                        </div>
                        <div class="tp-caption rev-title sfr str" data-x="20" data-y="56" data-speed="600"
                             data-start="1400" data-endspeed="200">
                            DÚVIDA, SUGESTÃO?
                        </div>
                        <div class="tp-caption rev-text long sfr str" data-x="20" data-y="110"
                             data-speed="600" data-start="1650" data-endspeed="300">
                            Alguma dúvida fique a vontade para perguntar,
                            <br>
                            sugestões sempre são bem-vindas.
                        </div>
                        <div class="tp-caption sfr str" data-x="20" data-y="190" data-speed="600"
                             data-start="1900" data-endspeed="400">
                            <a href="contato.html" class="btn btn-custom-2">Leia mais</a>
                        </div>
                    </li>
                </ul>
            </div><!-- fim div slider container -->
        </div><!-- fim div carrosel -->


        <!-- Informar tamanho de espaço de uma div a outra -->
        <div class="md-margin2x"></div>

        <!-- Informar ancora para div cardápio -->
        <a name="cardapio_principal"></a>

        <!-- Informar cardápio -->
        <div class="container">
            <div class="similiar-items-container carousel-wrapper">
                <header class="content-title">
                    <div class="title-bg"><h2 class="title">Cardápio</h2></div>
                    <p class="title-desc">Escolha os seus pratos, sinta os sabores ao redor do mundo bem pertinho de você</p>
                </header>
                <div class="carousel-controls">
                    <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                    <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                </div>
                <div class="similiar-items-slider owl-carousel">

                    <!-- Informar produto brasil -->
                    <div class="item item-hover">
                        <div class="item-image-wrapper">
                            <figure class="item-image-container"><a href="produto_brasil.html"><img
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                                            src="{{ asset('/site/images/products/item1.jpg') }}" alt="item1" class="item-image"> <img
                                            src="{{ asset('/site/images/products/item1-hover.jpg') }}" alt="item1  Hover"
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
                </div><!-- fim div itens cardápio -->
            </div><!-- fim div carrosel cardápio -->
        </div><!-- fim div container cardápio -->

        <!-- Informar ancora para div festa -->
        <a name="festa_principal"></a>

        <!--Iniciar div festa -->
        <div class="container">
            <div class="md-margin"></div>
            <header class="content-title">
                <div class="title-bg">
                    <h2 class="title">A Festa</h2>
                </div>
            </header>

            <!-- Menu div Festa -->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 md-margin">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <!-- Indicadores -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol>

                        <!-- Imagens slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/site/images/blog/post1-large.jpg') }}" class="img-responsive" alt="Slider post 1">

                                <div class="carousel-caption">
                                    More Features
                                </div>
                            </div>

                            <div class="item">
                                <img src="{{ asset('/site/images/blog/post1-large.jpg') }}" class="img-responsive" alt="Slider post 2">

                                <div class="carousel-caption">
                                    More Ui Elements
                                </div>
                            </div>
                        </div>

                        <!-- Controles -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                    <div class="md-margin"></div>
                    <h3 class="sub-title">Bem vindo a Festa das nações</h3>

                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <p align="justify">A Festa das Nações realizada todos os anos pela <a
                                    href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts"
                                    target="_blank">
                                Igreja Evangélica Shekiná</a> dos Pastores Alessandro Carvalho e Sibelle Carvalho, já se tornou uma
                            tradição em Cacoal. Em um clima extremamente agradável e familiar, conta com diversas apresentações
                            de dança e
                            comidas típicas, representando diversos países, em barracas temáticas e pratos cuidadosamente
                            elaborados de acordo com a cultura de cada País.
                        </p>

                        <!-- Informar vídeos apresentação -->
                        <div id="related-portfolio-container" class="carousel-wrapper">
                            <div class="carousel-controls">
                                <div id="related-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                                <div id="related-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                            </div>
                            <div class="row">
                                <div class="related-portfolio owl-carousel">
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio4.jpg') }}" alt="Portfolio item 4">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio4.jpg') }}" title="Portfolio item 4"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio11.jpg') }}" alt="Portfolio item 11">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio11.jpg') }}" title="Portfolio item 11"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio1.jpg') }}" alt="Portfolio item 1">
                                            <figcaption>
                                                <a href="https://www.youtube.com/watch?v=u8Hak_70CJM" title="Apresentação Angola"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio8.jpg') }}" alt="Portfolio item 8">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio8.jpg') }}" title="Portfolio item 8"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio13.jpg') }}" alt="Portfolio item 13">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio13.jpg') }}" title="Portfolio item 13"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio14.jpg') }}" alt="Portfolio item 14">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio14.jpg') }}" title="Portfolio item 14"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio10.jpg') }}" alt="Portfolio item 10">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio10.jpg') }}" title="Portfolio item 10"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" alt="Portfolio item 3">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" title="Portfolio item 3"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class="portfolio-item">
                                        <figure>
                                            <img src="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" alt="Portfolio item 3">
                                            <figcaption>
                                                <a href="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" title="Portfolio item 3"
                                                   data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                                </a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div><!-- fim div carrosel fotos festa  -->
                            </div> <!-- fim div linha -->
                        </div><!-- fim div container carrosel -->
                    </div><!-- fim div tamanho -->

                    <!-- informar vídeo da festa -->
                    <div class="col-md-4 col-sm-4 col-xs-12 lg-margin">
                        <iframe width="365" height="225" src="http://www.youtube.com/embed/Z0MNVFtyO30?rel=0"></iframe>
                    </div>
                </div><!-- fim div tamanho -->
            </div><!-- fim div container -->


            <!-- Informar ancora para div cardápio -->
            <a name="patrocinadores_principal"></a>

            <!-- Informar patrocinadores -->
            <div class="container">
                <div id="brand-slider-container" class="carousel-wrapper">
                    <header class="content-title">
                        <div class="title-bg"><h2 class="title">Patrocínio</h2></div>
                    </header>
                    <div class="carousel-controls">
                        <div id="brand-slider-prev" class="carousel-btn carousel-btn-prev"></div>
                        <div id="brand-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                    </div>
                    <div class="sm-margin"></div>
                    <div class="row">
                        <div class="brand-slider owl-carousel"><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 1"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 2"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 3"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 4"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 5"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 6"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 7"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 8"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 9"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 10"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 11"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 12"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 13"></a><a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 14"></a> <a href="#">
                                <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 15"></a></div>
                    </div><!-- fim div linha patrocinador -->
                </div><!-- fim div carrosel patrocinador -->
            </div> <!-- fim div container -->
        </div> <!-- fim div container -->
    </section> <!-- fim div section -->

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
                            <li><a href="https://www.facebook.com/pages/Millenium/558733344212135?rf=234786046680210" target="_blank">Local do evento</a></li>
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
                        <button class="btn btn-custom-2" >ENVIAR</button>
                    </div> <!-- Fim do .modal-footer -->
                </div><!-- Fim do .modal-content -->
            </div><!-- Fim do .modal-dialog -->
        </form> <!-- fim form modal login -->
    </div> <!-- fim div modal -->

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
</body>
</html>