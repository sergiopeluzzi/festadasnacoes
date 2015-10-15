@extends('site.modelo')

@section('body')
    <div class="sm-margin"></div>
    <div align="center">
        <h1>!! ATENÇÃO !!</h1>
        <img src="{{ asset('site/images/homeslider/Error_Icon_256.png') }}"/>
        <h1>NÃO FOI POSSÍVEL FINALIZAR A SUA COMPRA!!!</h1>
        <h3>Tente novamente mais tarde.</h3>
        <div class="col-sm-4 col-lg-offset-4">
            <a href="/meucarrinho" class="form-control btn btn-custom-2 btn-danger">Clique aqui para voltar ao carrinho</a>

        </div>
        <div class="md-margin"></div>
    </div>
    <div class="sm-margin"></div>
@stop