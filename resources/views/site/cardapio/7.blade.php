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
                                            <a href="#overview" data-toggle="tab">Nação</a>
                                        </li>
                                        <li>
                                            <a href="#description" data-toggle="tab">Prato</a>
                                        </li>
                                    </ul>
                                    <!-- Informar sobre a nação do produto -->
                                    <div class="tab-content clearfix">
                                        <div class="tab-pane active" id="overview"><p>Goiás é uma das 27 unidades federativas do Brasil.
                                                Situa-se a leste da Região Centro-Oeste,no Planalto Central brasileiro. O seu território é de 340.086 km²,
                                                sendo delimitado pelos estados do Mato Grosso do Sul a sudoeste, Mato Grosso a oeste, Tocantins a norte,
                                                Bahia a nordeste, Minas Gerais a leste, sudeste e sul e pelo Distrito Federal a leste.</p>

                                            <p>Goiânia é a capital e maior cidade do estado, assim como sede da Região Metropolitana de Goiânia,
                                                a única no estado. Outras cidades importantes, fora da região metropolitana de Goiânia, são:
                                                Anápolis, Rio Verde, Itumbiara, Catalão, Luziânia, Formosa, Jataí, Porangatu, Caldas Novas,
                                                Quirinópolis e Niquelândia, que também são as maiores cidades em população do interior do estado,
                                                além das cidades que compõem o Entorno do Distrito Federal. Ao todo são 246 municípios .</p>

                                            <p>Com 6 523 222 habitantes2 é o estado mais populoso do Centro-Oeste e o nono mais rico do país. Segundo o Tribunal
                                                Regional Eleitoral de Goiás, em junho de 2011 registram-se em Goiás 4.061.613 eleitores 7</p>
                                        </div>

                                        <div class="tab-pane" id="description"><p>The perfect mix of portability and
                                                performance in a slim 1" form factor:</p>
                                            <ul class="product-details-list">
                                                <li>3rd gen Intel® Core™ i7 quad core processor available;</li>
                                                <li>Windows 8 Pro available;</li>
                                                <li>13.3" and 15.5" screen sizes available;</li>
                                                <li>Double your battery life with available sheet battery;</li>
                                                <li>4th gen Intel® Core™ i7 processor available;</li>
                                                <li>Full HD TRILUMINOS IPS touchscreen (1920 x 1080);</li>
                                                <li>Super fast 512GB PCIe SSD available;</li>
                                                <li>Ultra-light at just 2.34 lbs.</li>
                                                <li>And more...</li>
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