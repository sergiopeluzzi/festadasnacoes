@extends('site.modelo')

@section('body')
    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">Início</a></li>
                    <li class="active">Minha conta</li>
                </ul>
            </div>
        </div>

        <!-- Informar cadastrar usuário -->
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
                    <header class="content-title">
                        <div class="title-bg">
                            <h2 class="title">Minha conta</h2>
                        </div>

                        <p>Verifique os seus dados, é importante para segurança do seu pedido</p>
                    </header>
                    <div class="xs-margin"></div>

                    <!-- Informar dados para cadastro -->

                    {!! Form::model($cliente, ['method' => 'POST', 'action' => ['ClientesController@update', $cliente->id] ]) !!}
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset><h2 class="sub-title">DADOS DO CLIENTE</h2>
                                    <input type="hidden" value="{{ $cliente = $cliente->where('id_user',  Auth::user()->id)->first() }}">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="input-icon">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <span class="input-text">
                                                Nome
                                            </span>
                                        </span>

                                        <input type="text" value="{{ $cliente->nome }}" required class="form-control input-lg" readonly placeholder="Seu nome">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="input-icon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <span class="input-text">
                                                E-mail
                                            </span>
                                        </span>
                                        <input type="email" value="{{ $cliente->email }}" required class="form-control input-lg" readonly placeholder="Seu e-mail">
                                    </div>

                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="input-icon">
                                                <i class="fa fa-list"></i>
                                            </span>
                                            <span class="input-text">
                                                CPF
                                            </span>
                                        </span>
                                        <input type="text" value="{{ $cliente->cpf }}" class="form-control input-lg" readonly id="cpf" placeholder="Seu CPF">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="input-icon">
                                                <i class="fa fa-mobile fa-2x"></i>
                                            </span>
                                            <span class="input-text">
                                                Telefone
                                            </span>
                                        </span>
                                        <input type="text" value="{{ $cliente->telefone }}" class="form-control input-lg" readonly id="telefone" placeholder="Seu telefone">
                                    </div>

                                    <!--<input type="submit" value="Alterar Dados" class="btn btn-custom-2 md-margin">-->
                                </fieldset>

                            </div>

                            <h2 class="sub-title">FORMAS DE PAGAMENTO</h2>

                            <!--Informar meio de pagamento -->
                            <div class="col-md-6 col-sm-6 col-xs-12 service-box-container">
                                <img src="{{ asset('/site/images/pagseguro.png') }}" data-href="https://pagseguro.uol.com.br/">
                                <div class="services-box">
                                    <h3><a href="https://pagseguro.uol.com.br/" target="_blank">PagSeguro</a> <span class="small-bottom-border"></span></h3>
                                    <p>Parcele em até 12x, o pagamento no cartão de crédito garante a você a compra dos produtos totalmente on-line, simples e rápido.</p>
                                </div>
                            </div>

                        </div>
                    {!! Form::close() !!}
                </div>
                @endif
            </div>
        </div>
    </section>
 @stop