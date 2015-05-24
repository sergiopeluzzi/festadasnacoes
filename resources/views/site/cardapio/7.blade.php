@extends('site.modelo')

@section('body')

    <section id="content">

        <!-- Informar menu rápido acesso -->
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Início</a></li>
                    <li class="active">Produtos</li>
                </ul>
            </div>
        </div>

        <!-- Informar div produtos -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 product-viewer clearfix">
                            <div id="product-image-carousel-container">

                                <!-- Imagem acesso a esquerda -->
                                <ul id="product-carousel" class="celastislide-list">
                                    <li class="active-slide"><a data-rel="prettyPhoto[product]"
                                                                href="images/products/big-item1.jpg"
                                                                data-image="images/products/big-item1.jpg"
                                                                data-zoom-image="images/products/big-item1.jpg"
                                                                class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item10.jpg" alt="Phone photo 1"></a>
                                    </li>
                                    <li><a data-rel="prettyPhoto[product]" href="images/products/big-item2.jpg"
                                           data-image="images/products/big-item2.jpg"
                                           data-zoom-image="images/products/big-item2.jpg" class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item11.jpg" alt="Phone photo 2"></a>
                                    </li>
                                    <li><a data-rel="prettyPhoto[product]" href="images/products/big-item3.jpg"
                                           data-image="images/products/big-item3.jpg"
                                           data-zoom-image="images/products/big-item3.jpg" class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item12.jpg" alt="Phone photo 3"></a>
                                    </li>
                                    <li><a data-rel="prettyPhoto[product]" href="images/products/big-item4.jpg"
                                           data-image="images/products/big-item4.jpg"
                                           data-zoom-image="images/products/big-item4.jpg" class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item13.jpg" alt="Phone photo 4"></a>
                                    </li>
                                    <li><a data-rel="prettyPhoto[product]" href="images/products/big-item5.jpg"
                                           data-image="images/products/big-item5.jpg"
                                           data-zoom-image="images/products/big-item5.jpg" class="product-gallery-item"><img
                                                    src="images/products/thumbnails/item14.jpg" alt="Phone photo 4"></a>
                                    </li>
                                </ul>
                            </div> <!-- Fim div produtos a esquerda -->

                            <!-- Imagem inicial do produto e o seu valor -->
                            <div id="product-image-container">
                                <figure><img src="images/products/big-item1.jpg"
                                             data-zoom-image="images/products/big-item1.jpg" alt="Product Big image"
                                             id="product-image">
                                    <figcaption class="item-price-container"><span class="old-price">$160</span> <span
                                                class="item-price">$120</span></figcaption>
                                </figure>
                            </div>
                        </div>

                        <!-- Informar o nome do produto -->
                        <div class="col-md-6 col-sm-12 col-xs-12 product">
                            <div class="lg-margin visible-sm visible-xs"></div>
                            <h1 class="product-name">Churrasco</h1>
                            <ul class="product-list">
                                <!-- Informar a disponibilidade do estoque do produto -->
                                <li><span>Disponível:</span>Sim</li>
                                <!-- Informar o código do produto -->
                                <li><span>Código do produto:</span>483512569</li>
                                <!-- Informar a nação do produto -->
                                <li><span>Nação:</span>Brasil - Goiás</li>
                            </ul>
                            <hr>

                            <!-- Informar a quantidade e adicionar ao carrinho -->
                            <div class="product-add clearfix">
                                <div class="custom-quantity-input"><input type="text" name="quantidade" id="quantidade1" value="1">
                                    <a   class="quantity-btn quantity-input-up" onclick="mais( 'quantidade1' )">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a class="quantity-btn quantity-input-down" onclick="menos( 'quantidade1')">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <button class="btn btn-custom-2">Adicionar carrinho</button>
                            </div>
                            <hr>
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
                                <div class="widget"><h3>GOIÁS</h3>

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
                        <div class="lg-margin2x"></div>

                        <div class="container">
                            <div class="similiar-items-container carousel-wrapper">
                                <header class="content-title">
                                    <div class="title-bg"><h2 class="title">Cardápio</h2></div>
                                    <p class="title-desc">Escolha os seus pratos, sinta os sabores ao redor do mundo bem pertinho de você</p>
                                </header>
                                <div class="carousel-controls" >
                                    <div id="similiar-items-slider-prev" class="carousel-btn carousel-btn-prev" ></div>
                                    <div id="similiar-items-slider-next" class="carousel-btn carousel-btn-next carousel-space"></div>
                                </div>
                                <div class="similiar-items-slider owl-carousel">

                                    <!-- Informar produto 1 -->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 10,00</span></div>
                                            <span class="new-rect">Brasil</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Espetinho de Ganso</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- informar produto 2 -->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 15,00</span></div>
                                            <span class="new-rect">Eua</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Lanche Americano</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informar produto 3-->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 25,00</span></div>
                                            <span class="new-rect">Itália</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Macarronada</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informar produto 4 -->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 8,00</span></div>
                                            <span class="new-rect">Irlanda</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Lanche Americano</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informar produto 5 -->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 3,50</span></div>
                                            <span class="new-rect">México</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Tortilha</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Informar produto 6 -->
                                    <div class="item item-hover">
                                        <div class="item-image-wrapper">
                                            <figure class="item-image-container"><a href="product.html"><img
                                                            src="images/products/item1.jpg" alt="item1" class="item-image"> <img
                                                            src="images/products/item1-hover.jpg" alt="item1  Hover"
                                                            class="item-image-hover"></a></figure>
                                            <div class="item-price-container"><span class="item-price">R$ 3,00</span></div>
                                            <span class="new-rect">Bebidas</span>
                                        </div>
                                        <div class="item-meta-container">
                                            <h3 class="item-name"><a href="product.html">Refrigerante Lata 250ml</a></h3>
                                            <div class="item-action"><a href="#" class="item-add-btn">
                                                    <span class="icon-cart-text">Adicionar carrinho</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@stop