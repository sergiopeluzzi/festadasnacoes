@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Início</a></li>
                <li class="active">Meus pedidos</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @if(Auth::guest())
                <div>
                    <h1 align="center">T_T</h1>
                    <h3 align="center">Usuário não logado</h3>
                    <h1 align="center">Por favor faça seu login!</h1>
                </div>
            @else
            <div class="col-md-12">
                <!-- Informar meus pedidos -->
                <header class="content-title"><h1 class="title">Meus pedidos</h1>
                    <p class="title-desc">Segue abaixo os pedidos realizados por: </p>
                </header>
                <div class="xs-margin"></div>

                <!-- Informar grid meus pedidos -->
                <div class="table-responsive">
                    <table class="table checkout-table">
                        <thead>
                        <tr>
                            <th class="table-title">Nome produto</th>
                            <th class="table-title">Código produto</th>
                            <th class="table-title">Preço un</th>
                            <th class="table-title">Quantidade</th>
                            <th class="table-title">Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        <!-- Informar dados dos meus pedidos -->
                        <tr>
                            <td class="item-name-col">
                                <figure><a href="#"><img src="images/products/compare1.jpg"
                                                         alt="Lowlands Lace Blouse"></a>
                                </figure>
                                <header class="item-name"><a href="#">Lowlands Lace Blouse</a>
                                </header>
                                <ul>
                                    <li>Color: White</li>
                                    <li>Size: SM</li>
                                </ul>
                            </td>
                            <td class="item-code">MP125984154</td>
                            <td class="item-price-col"><span
                                        class="item-price-special">$1175</span></td>
                            <td>
                                <div class="custom-quantity-input">
                                    <input type="text" name="quantidade" id="quantidade1" value="1">
                                    <a onclick="mais('quantidade1')" class="quantity-btn quantity-input-up">
                                        <i class="fa fa-angle-up"></i>
                                    </a>
                                    <a onclick="menos('quantidade1')" class="quantity-btn quantity-input-down">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                            </td>
                            <td class="item-total-col"><span
                                        class="item-price-special">$1175</span>
                                <a href="#" class="close-button" ><i class="fa fa-times fa-lg" ></i></a>
                            </td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="checkout-total-title" colspan="4"><strong>TOTAL:</strong>
                            </td>
                            <td class="checkout-total-price cart-total"><strong>$434.50</strong>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>

                <div class="xlg-margin"></div>
            </div>
            @endif
        </div>
    </div>
</section>
@stop