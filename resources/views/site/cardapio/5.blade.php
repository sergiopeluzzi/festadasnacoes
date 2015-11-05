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
                                                A Turquia (em turco: Türkiye, pronunciado: [ˈtyrcije]), cujo nome oficial é República da Turquia
                                                (Türkiye Cumhuriyeti, pronunciado: [ˈtyrcije d͡ʒumˈhurijeti]), é um país euro-asiático que ocupa
                                                toda a península da Anatólia, no extremo ocidental da Ásia, e se estende pela Trácia Oriental
                                                (também conhecida como Rumélia), no sudeste da Europa. É um dos seis estados independentes cuja
                                                população é maioritariamente turca. Faz fronteira com oito países: a noroeste com a Bulgária, a
                                                oeste com a Grécia, a nordeste com a Geórgia, a Arménia e o enclave de Nakichevan do Azerbaijão,
                                                a leste com o Irão e a sudeste com o Iraque e a Síria. O mar Mediterrâneo e o Chipre situam-se a sul,
                                                o mar Egeu a sudoeste-oeste e o mar Negro a norte. O mar de Mármara, o Bósforo e o Dardanelos (que
                                                juntos formam os Estreitos Turcos) demarcam a fronteira entre a Trácia e a Anatólia e separam a
                                                Europa da Ásia.
                                            </p>
                                            <p align="justify">
                                                Os turcos começaram a migrar para a área que é atualmente a Turquia ("terra dos turcos") no século XI.
                                                O processo foi acelerado pela vitória do Império Seljúcida sobre o Império Bizantino, na Batalha
                                                de Manziquerta. Os turcos seljúcidas constituíram um poderoso reino na Anatólia nos 150 anos seguintes,
                                                o Sultanato de Rum, que governou grande parte da Anatólia até às invasões mongóis, em meados do século
                                                XIII. A decadência do sultanato seljúcida deu origem à independência e expansão política e militar de
                                                uma série de beilhiques (principados muçulmanos), entre eles o dos otomanos, que viriam a absorver os
                                                restantes beilhiques e a criar o Império Otomano, que no seu auge, nos séculos XVI e XVII, se estendia
                                                desde o Sudeste da Europa ao Sudoeste da Ásia e Norte da África. Após o Império Otomano ter entrado em
                                                colapso, na sequência da derrota na Primeira Guerra Mundial, os seus territórios foram ocupados pelos
                                                aliados vitoriosos. Um grupo de jovens oficiais militares, liderados por Mustafa Kemal, organizou uma
                                                resistência contra os Aliados, e em 1923 estabeleceu a moderna República da Turquia, com Kemal Atatürk
                                                como seu primeiro presidente.
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