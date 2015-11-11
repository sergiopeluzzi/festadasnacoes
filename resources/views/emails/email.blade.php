<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Festa das Nações </title>

    <!-- links estilos -->
    <link rel="stylesheet" href="{{ asset('/site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/colpick.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/revslider.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/site/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/site/images/logofesta.png') }}">

    <!-- scripts -->
    <script src="{{ asset('/site/js/jquery-1.11.1.min.js') }}"></script>
</head>
<body>

<div id="wrapper">
    <header id="header">
        <div id="inner-header">

        </div>
        <!-- End #inner-header -->
    </header>
    <!-- End #header -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- E-mail Confirmação pedido -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-container clearfix">
                                <!-- Conteúdo e-mail -->
                                <div class="tab-content clearfix">
                                    <!-- Imagem do evento -->
                                    <div align="center">
                                        <img src="{{asset('/site/images/logofesta.png')}}" width="300" height="300" align="center">
                                    </div>

                                    <div align="center">
                                        <h1 class="sub-title"><font color="#32cd32"><i class="fa fa-check fa-3x"></i>
                                                Recebemos o seu pedido</font>
                                        </h1>
                                    </div>
                                    <div align="center">
                                        <p>
                                            Estamos muito felizes, <font color="#ff0000"><b>{{$cliente->nome}}</b></font>
                                            pelo seu pedido.
                                        </p>
                                        <p>
                                            Lembre-se o evento irá ocorrer no dia <font color="#ff0000"><b>21 de Novembro de 2015</b></font>
                                            a partir das <font color="#ff0000"><b>19:00h</b></font> na Casa de shows
                                            <a href="https://www.facebook.com/pages/Millenium/558733344212135"
                                               title="Millenium" target="_blank"><u>Millenium</u></a>
                                            na cidade de Cacoal.
                                        </p>
                                    </div>

                                    <br>
                                    <br>

                                    <div align="center">
                                        <div><h1 class="sub-title">Número do seu Voucher é:</h1>
                                            <h1><font color="#ff0000">{{$pedido->id . $pedido->created_at->format('i') . $pedido->created_at->format('s')}}</font></h1>
                                            <p>A validade deste pedido está condicionada à aprovação da transação pelo PagSeguro</p>
                                        </div>
                                    </div>

                                    <br>
                                    <!-- Informações ao usuário -->
                                    <div align="center">
                                        <h1 class="sub-title"><font color="#ff0000"><i
                                                        class="fa fa-hand-o-right fa-2x"></i> PONTO DE TROCAS</font>
                                        </h1>
                                        <hr>
                                        <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                            No evento diriga-se ao Guiche de trocas Voucher.
                                        </h6>
                                        <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                            Ao atendente do guiche será necessário informar: O número do(s) Voucher(s)
                                            ou o CPF do comprador.
                                        </h6>
                                        <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                            PRONTO! O atendente irá entregar as Fichas que poderão ser consumidas nas
                                            respectivas barracas.
                                        </h6>
                                    </div>
                                    <br>
                                    <!-- Informações ao usuário -->
                                    <div align="center">
                                        <h1 class="sub-title"><font color="#ff0000"><i
                                                        class="fa fa-shopping-cart fa-2x"></i> DETALHES DO SEU PEDIDO</font></h1>

                                        <p>
                                            <a href="http://www.igrejashekina.com.br/meuspedidos" target="_blank">Clique aqui para visualizar seus pedidos</a>
                                        </p>

                                        <br>
                                        <br>

                                        <div>
                                            <h1 class="sub-title"><font color="#ff0000"><i
                                                            class="fa fa-credit-card fa-2x"></i> FORMA DE PAGAMENTO</font>
                                            </h1>

                                            <hr>
                                            <img src="{{asset('/site/images/pagseguro.png')}}">

                                            <br>
                                            <br>
                                            <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                                Caso tenha alguma dúvida sobre as suas operações financeiras, confira no
                                                <a title="Pagseguro" href="https://pagseguro.uol.com.br/atendimento/perguntas_frequentes/categoria/comprador.jhtml" target="_blank"> <u>PagSeguro</u></a>.
                                            </h6>
                                        </div>

                                        <br>
                                        <br>

                                        <div>
                                            <h1 class="sub-title"><font color="#ff0000"><i
                                                            class="fa fa-exclamation-circle fa-2x"></i> INFORMAÇÕES IMPORTANTES</font>
                                            </h1>

                                            <hr>

                                            <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                                A partir deste momento, não é possivel incluir ou excluir itens do pedido.
                                            </h6>

                                            <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                                Não verificamos esta caixa de correio, portanto, não responda a esta mensagem.
                                            </h6>

                                            <h6><font color="#ff0000"><i class="fa fa-chevron-right fa-1x"></i></font>
                                                Caso tenha alguma dúvida, entre em <a href="http://www.igrejashekina.com.br/contato" target="_blank" ><u>contato</u></a>
                                            </h6>
                                        </div>

                                        <hr>

                                        <div align="center">
                                            <p>
                                                <a href="https://www.facebook.com/pages/Igreja-Evang%C3%A9lica-Shekina/422667231144835" target="_blank">
                                                    Igreja Evangélica Shekina
                                                </a>
                                            </p>
                                            <p>Rua da Igreja, 546 - Princesa Izabel</p>
                                            <p>Cacoal-RO</p>
                                            <p>Aberto de Seg. - Sex</p>
                                            <p>Nos Horários: 8:00 as 18:00</p>
                                            <p>Telefones: 3441-5237</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .tab-content -->
                            </div>
                            <!-- End .tab-container -->
                        </div>
                        <!-- End .col-md-6 -->
                    </div>
                    <!-- Fim div confirmação pedido -->
                </div>
                <!-- End .col-md-12 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </section>
    <!-- End #content -->
</div>
<!-- End #wrapper -->
</body>
</html>