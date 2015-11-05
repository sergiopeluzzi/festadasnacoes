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
                                                Suécia (em sueco: Sverige, pronunciado: [ˈsværjɛ]), oficialmente Reino da Suécia (em sueco: Loudspeaker.svg?
                                                Konungariket Sverige), é um país nórdico, localizado na península Escandinava na Europa Setentrional.
                                                A Suécia divide fronteiras terrestres com a Noruega, a oeste, e com a Finlândia, a nordeste, além de
                                                estar ligada à Dinamarca através da Ponte do Øresund, no sul.
                                                Com 450 295 km², a Suécia é o terceiro maior país da União Europeia em termos de área e possui uma população
                                                total de cerca de 9,2 milhões de habitantes. A Suécia tem uma baixa densidade populacional, com cerca de 21
                                                habitantes por quilômetro quadrado, mas com uma densidade consideravelmente maior na metade sul do país.
                                                Cerca de 85% da população vive em áreas urbanas. A capital e maior cidade da Suécia é Estocolmo (com uma
                                                população de 1,3 milhões na área urbana e de 2 milhões na área metropolitana), centro do poder político e
                                                econômico do país. A Suécia é membro fundador da Organização das Nações Unidas, da União Europeia desde 1º
                                                de janeiro de 1995, e da OCDE.
                                            </p>
                                            <p align="justify">
                                                A Suécia é uma monarquia constitucional com um sistema parlamentar de governo, com uma economia altamente
                                                desenvolvida e diversificada. O país ocupa o quarto lugar do mundo no Índice de democracia, depois da Islândia,
                                                da Dinamarca e da Noruega, segundo a prestigiada revista inglesa The Economist. O país ainda é considerado um
                                                dos mais socialmente justos da atualidade, apresentando um dos mais baixos níveis de desigualdade de renda do
                                                mundo. Isso se reflete no fato da Suécia estar, desde que a ONU começou a calcular o IDH (Índice de
                                                Desenvolvimento Humano) de seus membros na década de 1980, entre os mais bem colocados países do mundo de
                                                acordo com o indicador.
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
        </div>
    </section>
@stop