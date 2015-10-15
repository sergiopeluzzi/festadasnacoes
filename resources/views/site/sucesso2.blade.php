@extends('site.modelo')

@section('body')
    <div class="sm-margin"></div>
    <div align="center">
        <img src="{{ asset('site/images/homeslider/Success_Icon_256.png') }}"/>
        <h1>CADASTRO REALIZADO COM SUCESSO!!!</h1>
        <div class="col-sm-4 col-lg-offset-4">
            <a href="#" data-toggle="modal" data-target="#modal-login-form" class="form-control btn btn-custom-2 btn-danger">
                Clique aqui para entrar
            </a>
        </div>
        <div class="md-margin"></div>
    </div>
    <div class="sm-margin"></div>
@stop