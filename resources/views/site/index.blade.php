@extends('site.modelo')

@section('body')

<section id="content">

    <!--Informar carrosel principal-->
    <div id="slider-rev-container">
        <div id="slider-rev">
            <ul>

                <!--Informar a festa-->
                <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                    data-saveperformance="on" data-title="Special Offers">
                    <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                         data-lazyload="{{ asset('/site/images/homeslider/faca_pedido.jpg') }}"
                         data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="100" data-speed="1200"
                         data-start="400" data-endspeed="200">
                        <font color="red">21.11.2015 à partir das 19:00hs</font>
                    </div>
                    <div class="tp-caption rev-text2 lfr ltr" data-x="755" data-y="160" data-speed="1600"
                         data-start="1050" data-endspeed="550">
                        Millenium - Cacoal/RO
                    </div>
                    <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="200" data-speed="1600"
                         data-start="300" data-endspeed="300">
                        {{$evento->nome}}
                    </div>
                    <div class="tp-caption rev-text lfr ltr" data-x="350" data-y="500" data-speed="1600"
                         data-start="600" data-endspeed="550">
                    </div>
                    <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                         data-start="900" data-endspeed="800">
                        <a href="#festa_principal" class="btn btn-custom-2">Leia mais</a>
                    </div>
                    <div class="tp-caption lfl ltl" data-x="center" data-y="bottom" data-hoffset="-230"
                         data-speed="2000" data-start="500" data-endspeed="800">
                        <img src="{{ asset('/site/images/homeslider/festa.png') }}" alt="Slide 1_1">
                    </div>
                </li>

                <!-- Informar pedido-->
                <li data-transition="fade" data-slotamount="5" data-masterspeed="600" data-saveperformance="on" data-title="Learn More">
                    <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                         data-lazyload="{{ asset('/site/images/homeslider/faca_pedido.jpg') }}"
                         data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption rev-title lfr ltr" data-x="755" data-y="238" data-speed="1600"
                         data-start="750" data-endspeed="300">
                        FAÇA SEU PEDIDO
                    </div>
                    <div class="tp-caption rev-text2 lfr ltr" data-x="755" data-y="290" data-speed="1600"
                         data-start="1050" data-endspeed="550">
                        Agora é fácil!
                        <br>
                        Experimente todos os nossos pratos!
                    </div>
                    <div class="tp-caption lfr ltr" data-x="755" data-y="360" data-speed="1600"
                         data-start="1350" data-endspeed="800">
                        <a href="/#cardapio_principal" class="btn btn-custom-2">Cardápio</a>
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

                @foreach($nacoes as $nacao)
                    <!-- Informar nação goias-->
                    <li data-transition="fade" data-slotamount="6" data-masterspeed="600"
                        data-saveperformance="on">
                        <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg1"
                             data-lazyload="{{ asset('/site/images/homeslider/bandeira'. $nacao->id .'.png') }}"
                             data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption rev-text2 lfr ltr" data-x="695" data-y="150" data-speed="1600"
                             data-start="100" data-endspeed="900" data-bgposition="center center">
                            <font size="96" color="white">{{ $pratos->where('id_nacao', $nacao->id)->first()->descricao }}</font>
                        </div>

                        <div class="tp-caption rev-title lfr ltr" data-x="695" data-y="250" data-speed="1600"
                             data-start="300" data-endspeed="300" data-bgposition="center center">
                            <font color="white">{{$nacao->nome}}</font>
                        </div>
                           <div class="tp-caption lfr ltr" data-x="695" data-y="332" data-speed="1600"
                             data-start="900" data-endspeed="800">
                            <a href="/cardapio/{{$nacao->id}}" class="btn btn-custom-2">Leia mais</a>
                        </div>
                        <div class="tp-caption lfl ltl" data-x="center" data-y="100" data-hoffset="-230"
                             data-speed="2000" data-start="500" data-endspeed="800">
                            <img src="{{ asset('/site/images/pratos/prato' . $pratos->where('id_nacao', $nacao->id)->first()->id . '.png') }}" alt="Slide 1_1">
                        </div>
                    </li>
                @endforeach

                <!-- Acessar contato -->
                <li data-transition="fade" data-slotamount="4" data-masterspeed="600"
                    data-saveperformance="on" data-title="More Features">
                    <img src="{{ asset('/site/images/revslider/dummy.png') }}" alt="slidebg3"
                         data-lazyload="{{ asset('/site/images/homeslider/faca_pedido.jpg') }}"
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
                        <a href="/contato" class="btn btn-custom-2">Contato</a>
                    </div>
                </li>
            </ul>
        </div><!-- fim div slider container -->
    </div><!-- fim div carrosel -->

    <!-- Informar ancora para div cardápio -->
    <a name="cardapio_principal"></a>

    <!-- Informar tamanho de espaço de uma div a outra -->
    <div class="md-margin2x"></div>

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
                <!-- Produtos do cardapio -->
                @foreach($pratos as $prato)
                <div class="item item-hover">
                    <div class="item-image-wrapper">
                        <figure class="item-image-container"><a href="cardapio/{{ $prato->id_nacao }}"><img
                                        src="{{ asset('/site/images/pratos/pratoc'. $prato->id .'.png') }}" alt="item1" class="item-image"> <img
                                        src="{{ asset('/site/images/pratos/pratoh'. $prato->id .'.png') }}" alt="item1  Hover"
                                        class="item-image-hover"></a></figure>
                        <div class="item-price-container"><span class="item-price">R$ {{ number_format($prato->valor,2) }}</span></div>
                        <span class="new-rect">{{ $nacoes->where('id', $prato->id_nacao)->first()->nome }}</span>
                    </div>
                    <div class="item-meta-container">
                        <h3 class="item-name"><a href="cardapio/{{ $prato->id_nacao }}">{{ $prato->descricao }}</a></h3>

                        <div class="item-action"><a href="meucarrinho/add/{{ $prato->id }}" class="item-add-btn"> <!-- meucarrinho/add/{{ $prato->id }} -->
                                <span class="icon-cart-text">Adicionar carrinho</span></a> <!-- Adicionar carrinho -->
                        </div>
                    </div>
                </div>
                @endforeach

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
                        </div>

                        <div class="item">
                            <img src="{{ asset('/site/images/blog/1.png') }}" class="img-responsive" alt="Slider post 2">
                        </div>

                        <div class="item">
                            <img src="{{ asset('/site/images/blog/2.png') }}" class="img-responsive" alt="Slider post 2">
                        </div>

                        <div class="item">
                            <img src="{{ asset('/site/images/blog/3.png') }}" class="img-responsive" alt="Slider post 2">
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
                                        <img src="{{ asset('/site/images/portfolio/classic/portfolio1.jpg') }}" alt="Portfolio item 4">
                                        <figcaption>
                                            <a href="{{ asset('/site/images/portfolio/classic/portfolio1.jpg') }}" title="Portfolio item 4"
                                               data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio-item">
                                    <figure>
                                        <img src="{{ asset('/site/images/portfolio/classic/portfolio2.jpg') }}" alt="Portfolio item 11">
                                        <figcaption>
                                            <a href="{{ asset('/site/images/portfolio/classic/portfolio2.jpg') }}" title="Portfolio item 11"
                                               data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio-item">
                                    <figure>
                                        <img src="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" alt="Portfolio item 8">
                                        <figcaption>
                                            <a href="{{ asset('/site/images/portfolio/classic/portfolio3.jpg') }}" title="Portfolio item 8"
                                               data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio-item">
                                    <figure>
                                        <img src="{{ asset('/site/images/portfolio/classic/portfolio4.jpg') }}" alt="Portfolio item 13">
                                        <figcaption>
                                            <a href="{{ asset('/site/images/portfolio/classic/portfolio4.jpg') }}" title="Portfolio item 13"
                                               data-rel="prettyPhoto[portfolio]" class="zoom-button">
                                            </a>
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="portfolio-item">
                                    <figure>
                                        <img src="{{ asset('/site/images/portfolio/classic/portfolio5.jpg') }}" alt="Portfolio item 14">
                                        <figcaption>
                                            <a href="{{ asset('/site/images/portfolio/classic/portfolio5.jpg') }}" title="Portfolio item 14"
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
                    <iframe width="365" height="225" src="https://www.youtube.com/embed/9qWi8wB0DXs?rel=0"></iframe>
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
                    <div class="brand-slider owl-carousel"><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 1"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 2"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 3"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 4"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 5"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 6"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 7"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 8"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 9"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 10"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 11"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 12"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 13"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 14"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank">
                            <img src="{{ asset('/site/images/brands/brand-logo.png') }}" alt="Brand Logo 15"></a><a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835?fref=ts" target="_blank"></a>
                    </div>
                </div><!-- fim div linha patrocinador -->
            </div><!-- fim div carrosel patrocinador -->
        </div> <!-- fim div container -->
    </div> <!-- fim div container -->
</section> <!-- fim div section -->

@stop