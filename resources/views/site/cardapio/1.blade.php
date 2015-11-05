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
                                            <p align="justify">O Rio de Janeiro é uma das 27 unidades federativas do Brasil. Situa-se na porção leste da região
                                                Sudeste, tendo como limites os estados de Minas Gerais (norte e noroeste), Espírito Santo (nordeste)
                                                e São Paulo (sudoeste), e também o Oceano Atlântico (leste e sul). Ocupa uma área de 43 780,172 km²,
                                                sendo pouco maior que a Dinamarca. Apesar de ser, efetivamente, o quarto menor estado do Brasil
                                                (ficando à frente apenas dos estados de Alagoas e Sergipe e do Distrito Federal, respectivamente, em
                                                terceiro, segundo e primeiro lugar), concentra 8,4% da população do país, figurando, consequentemente,
                                                como o estado com maior densidade demográfica do Brasil. É também o terceiro maior litoral do Brasil,
                                                ficando atrás apenas da Bahia e Maranhão respectivamente
                                            </p>
                                            <p>A maior cidade do estado é a sua capital homônima, que também é a segunda cidade mais populosa do
                                                Brasil. Os naturais do estado do Rio de Janeiro são chamados de fluminenses (do latim flumen,
                                                literalmente "rio"). Carioca é o gentílico da cidade do Rio de Janeiro. Segundo dados do Censo 2010,
                                                o Rio de Janeiro é o terceiro estado mais populoso do Brasil, atrás de São Paulo e Minas Gerais. Os 20
                                                municípios mais populosos são: Rio de Janeiro, São Gonçalo, Duque de Caxias, Nova Iguaçu, Niterói,
                                                Campos dos Goytacazes, Belford Roxo, São João de Meriti, Petrópolis, Volta Redonda, Magé, Macaé, Itaboraí,
                                                Cabo Frio, Angra dos Reis, Nova Friburgo, Barra Mansa, Teresópolis, Mesquita e Nilópolis, todos estes com
                                                populações acima de 150 mil habitantes.
                                            </p>

                                        </div>
                                        <div class="tab-pane" id="description">
                                            <div align="center">
                                            <img src="/site/images/homeslider/cozinha.png">
                                            </div>
                                            <br>
                                            <ul class="product-details-list">
                                                <p>
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
        </div>
    </section>
@stop