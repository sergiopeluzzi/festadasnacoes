@extends('site.modelo')

@section('body')

    <section id="content">

        <!-- Informar menu rápido acesso -->
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="/">Início</a>
                    </li>
                    <li class="active">
                        Produtos
                    </li>
                </ul>
            </div>
        </div>

        <!-- Informar div produtos -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">
                            <!-- Imagem inicial do produto e o seu valor -->
                            <div id="product-image-container">
                                <figure><img src="{{ asset('/site/images/pratos/pratoh'. $prato->where('id_nacao', $id)->first()->id .'.png') }}"
                                             data-zoom-image="images/products/big-item1.jpg" alt="Product Big image"
                                             id="product-image">
                                    <figcaption class="item-price-container"><span class="old-price">R$ {{ number_format(($prato->where('id_nacao', $id)->first()->valor + $prato->where('id_nacao', $id)->first()->valor* 0.20),2) }}</span> <span
                                                class="item-price">R$ {{ number_format($prato->where('id_nacao', $id)->first()->valor,2)  }}</span></figcaption>
                                </figure>
                            </div>
                        </div>

                        <!-- Informar o nome do produto -->
                        <div class="col-md-6 col-sm-12 col-xs-12 product">
                            <div class="lg-margin visible-sm visible-xs"></div>
                            <h1 class="product-name">{{ $prato->where('id_nacao', $id)->first()->descricao }}</h1>
                            <ul class="product-list">
                                <!-- Informar a disponibilidade do estoque do produto -->
                                <li><span>Disponível:</span>Sim</li>
                                <!-- Informar o código do produto -->
                                <li><span>Código do produto:</span>{{ $prato->where('id_nacao', $id)->first()->id }}</li>
                                <!-- Informar a nação do produto -->
                                <li><span>Nação:</span>{{ $nacao->find($id)->nome }}</li>
                            </ul>
                        </div>
                        <div class="lg-margin"></div>

                        <!-- Informar as especificações do produto -->
                        <div class="row">
                            <div class="col-md-9 col-sm-12 col-xs-12">
                                <div class="tab-container left product-detail-tab clearfix">
                                    <ul class="nav-tabs">
                                        <li class="active">
                                            <a href="#overview" data-toggle="tab"><i class="fa fa-globe fa-2x"></i>  {{ $nacao->find($id)->nome }}</a>
                                        </li>
                                        <li>
                                            <a href="#description" data-toggle="tab"><i class="fa fa-cutlery fa-lg"></i> MODO DE PREPARO</a>
                                        </li>
                                    </ul>
                                    <!-- Informar sobre a nação do produto -->
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="overview">
                                            <p align="justify">
                                                Espanha (em castelhano: España [esˈpaɲa]), oficialmente Reino da/de Espanha (em castelhano: Reino de España),
                                                é um país situado na Europa meridional, na Península Ibérica. Seu território principal é delimitado a sul e a
                                                leste pelo Mar Mediterrâneo, com exceção a uma pequena fronteira com o território britânico ultramarino de Gibraltar;
                                                ao norte pela França, Andorra e pelo Golfo da Biscaia e ao noroeste e oeste pelo Oceano Atlântico e por Portugal.
                                                O território espanhol inclui ainda as Ilhas Baleares, no Mediterrâneo, as Ilhas Canárias, no Oceano Atlântico,
                                                próximas da costa Africana e duas cidades autônomas no norte de África, Ceuta e Melilla, que fazem fronteira com o
                                                Marrocos. Com uma área de 504 030 km², a Espanha é, depois da França, o segundo maior país da Europa Ocidental e da
                                                União Europeia.
                                            </p>
                                            <p align="justify">
                                                Devido à sua localização, o território da Espanha foi sujeito a muitas influências externas, muitas vezes
                                                simultaneamente, desde os tempos pré-históricos até quando a Espanha se tornou um país. Por outro lado, o próprio
                                                país foi uma importante fonte de influência para outras regiões, principalmente durante a Era Moderna, quando se
                                                tornou um império mundial que deixou como legado mais de 400 milhões de falantes do espanhol espalhados pelo mundo.
                                            </p>

                                        </div>
                                        <div class="tab-pane" id="description">
                                            <div align="center">
                                                <img src="/site/images/homeslider/cozinha.png">
                                            </div>
                                            <br>
                                            <ul class="product-details-list">
                                                <p align="justify">
                                                </p>

                                            </ul>
                                        </div>
                                    </div>
                                </div>


                                <div class="lg-margin visible-xs"></div>
                            </div>
                            <div class="lg-margin2x visible-sm visible-xs"></div>
                            <!-- Colocar a div dos videos da naçao e apresentação -->

                            <aside class="col-md-3 col-sm-12 col-xs-12 sidebar">
                                <div class="widget"><h3>{{ $nacao->find($id)->nome }}</h3>

                                    <div class="video-container">
                                        <iframe src="http://www.youtube.com/embed/OzOh9cTbX60"></iframe>
                                    </div>
                                </div>
                            </aside>

                            <aside class="col-md-3 col-sm-12 col-xs-12 sidebar">
                                <div class="widget"><h3>DANÇA TÍPICA</h3>

                                    <div class="video-container">
                                        <iframe src="http://www.youtube.com/embed/OzOh9cTbX60"></iframe>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@stop