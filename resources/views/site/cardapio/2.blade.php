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
                                                Dinamarca (em Inglês e dinamarquês: Danmark, [ˈd̥ɛnmɑɡ̊]), oficialmente Reino da Dinamarca, é um país nórdico
                                                da Europa setentrional e membro sênior do Reino da Dinamarca. É o mais meridional dos países nórdicos, a sudoeste
                                                da Suécia e ao sul da Noruega, delimitado no sul pela Alemanha. As fronteiras da Dinamarca estão no Mar Báltico e
                                                no Mar do Norte. O país é composto por uma grande península, a Jutlândia, e 443 ilhas, das quais 78 habitadas, com
                                                destaque para a Zelândia (Sjælland), Funen (Fyn), Vendsyssel-Thy, Lolland, Falster e Bornholm, assim como centenas
                                                de ilhas menores, muitas vezes referidas como o Arquipélago Dinamarquês. A Dinamarca há muito tempo controla a
                                                entrada e a saída do mar Báltico, já que isso só pode acontecer através de três canais, que também são conhecidos
                                                como os "Estreitos Dinamarqueses".
                                            </p>
                                            <p align="justify">
                                                A língua nacional, o dinamarquês, é próxima do sueco e do norueguês. A Dinamarca compartilha fortes laços históricos
                                                e culturais com a Suécia e com a Noruega. 82,0% dos habitantes da Dinamarca e 90,3% da etnia dinamarquesa são membros
                                                da Igreja Estatal Luterana. Cerca de 9% da população tem nacionalidade estrangeira, sendo que uma grande parte deles
                                                são provenientes de outros países escandinavos.
                                                O país é uma monarquia constitucional com um sistema parlamentar de governo. Possui um governo central e outros locais
                                                em 98 municípios. O país é membro da União Europeia desde 1973, embora não tenha aderido ao euro, e um dos membros
                                                fundadores da Organização do Tratado do Atlântico Norte e da Organização para a Cooperação e Desenvolvimento Económico.
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