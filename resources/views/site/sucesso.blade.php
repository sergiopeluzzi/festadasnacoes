@extends('site.modelo')

@section('body')
    <div class="sm-margin"></div>
    <div align="center">
        <h1>\o/ PARABÉNS \o/</h1>
        <img src="{{ asset('site/images/homeslider/Success_Icon_256.png') }}"/>
        <h1>PEDIDO REALIZADO COM SUCESSO!!!</h1>
        <h3>Seu pedido foi registrado e aguarda confirmação de pagamento</h3>
        <h4>O status mudará automaticamente assim que o PagSeguro no enviar a confirmação de pagamento</h4>
        <div class="col-sm-4 col-lg-offset-4">
            <a href="/meuspedidos" class="form-control btn btn-custom-2 btn-danger">Clique aqui para ver seus pedidos</a>

        </div>
        <div class="md-margin"></div>
    </div>
    <div class="sm-margin"></div>
@stop