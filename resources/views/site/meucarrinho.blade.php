@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="/">Início</a>
                </li>
                <li class="active">
                    Meu carrinho
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">
                        Meu carrinho
                    </h1>
                    <p class="title-desc">
                        Confira os seus produtos antes de finalizar a compra.
                    </p>
                </header>
                <div class="xs-margin">
                </div>
                <div class="table-responsive">
                    <table class="table checkout-table">
                        <thead>
                        <tr>
                            <th class="table-title">
                                Nome produto
                            </th>
                            <th class="table-title">
                                Código produto
                            </th>
                            <th class="table-title">
                                Preço un
                            </th>
                            <th class="table-title">
                                Quantidade
                            </th>
                            <th class="table-title">
                                Total
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Informar dados dos produtos no pedido -->
                        @foreach($carrinho as $item)
                        <tr>
                            <td class="item-name-col">
                                <figure>
                                    <a href="#"><img src="{{ asset('/site/images/homeslider/prato'. $item['sku'] .'.png') }}"
                                                     alt="{{ $item['description'] }}"></a>
                                </figure>
                                <header class="item-name">
                                    <a href="#">{{ $item['description'] }}</a>
                                </header>
                                <ul>
                                    <li>
                                        Color: White
                                    </li>
                                    <li>
                                        Size: SM
                                    </li>
                                </ul>
                            </td>
                            <td class="item-code">
                                {{ $item['sku'] }}
                            </td>
                            <td class="item-price-col">
                                <span class="item-price-special" vlr_{{ $item['sku'] }}>{{ 'R$ ' . number_format($item['price'],2) }}</span>
                            </td>

                            <!-- Informar a quantidade -->
                            <td>
                                <div class="custom-quantity-input">
                                    <input type="text" name="quantidade" id="quantidade{{ $item['sku'] }}"  value="1">
                                    <a class="quantity-btn quantity-input-up" onclick="mais( 'quantidade{{ $item['sku'] }}' )">
                                        <i class="fa fa-angle-up"></i></a>
                                    <a class="quantity-btn quantity-input-down" onclick="menos( 'quantidade{{ $item['sku'] }}' )">
                                        <i class="fa fa-angle-down"></i></a>
                                </div>
                            </td>

                            <td class="item-total-col">
                                <span class="item-price-special" id="vlr_total_{{ $item['sku'] }}">R$ {{ number_format($item['price'],2) }}</span>
                                <a href="meucarrinho/remover/{{ $item['id'] }}" class="close-button" ><i class="fa fa-times fa-lg" ></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td class="checkout-total-title" colspan="4">
                                <strong>
                                    TOTAL:
                                </strong>
                            </td>
                            <td class="checkout-total-price cart-total">
                                <strong>
                                    R$ {{ number_format($cart['total'],2) }}
                                </strong>
                            </td>
                        </tr>
                        </tfoot>

                    </table>

                </div>
                <div class="lg-margin">
                </div>

                <!-- Informar botões para rotina final carrinho -->
                <div align="right">
                    <a href="/#cardapio_principal" class="btn btn-custom-2">CONTINUAR COMPRA</a>
                    <a href="finalizar.html" class="btn btn-custom">FINALIZAR</a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop