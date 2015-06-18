@extends('site.modelo')

@section('body')

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Início</a></li>
                <li class="active">Cadastrar usuário</li>
            </ul>
        </div>
    </div>

    <!-- Informar cadastrar usuário -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <div class="title-bg">
                        <h2 class="title"> Cadastrar usuário</h2>
                    </div>
                    <p>Se você já é cadastrado, por favor, faça o seu <a href="#" data-toggle="modal" data-target="#modal-login-form">login</a>.</p>
                    <P>Apenas os campos com * são obrigatórios</P>
                </header>
                <div class="xs-margin"></div>

                <!-- Informar dados para cadastro -->
                {!! Form::open(['id' => 'cadastrocliente', 'route' => 'site.cadastrar.cadastrar']) !!}
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset><h2 class="sub-title">PREENCHA OS DADOS</h2>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <span class="input-text">Nome&#42;</span>
                                    </span>
                                    {!! Form::text('nome', null, ['class' => 'form-control input-lg', 'placeholder' => 'Seu nome', 'required']) !!}
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <span class="input-text">
                                            E-mail&#42;
                                        </span>
                                    </span>
                                    {!! Form::email('email', null, ['class' => 'form-control input-lg', 'placeholder' => 'Seu e-mail', 'required' ]) !!}
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <span class="input-text">
                                            Senha&#42;
                                        </span>
                                    </span>
                                    {!! Form::password('password', ['class' => 'form-control input-lg', 'placeholder' => 'Sua senha', 'required' ]) !!}
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                        <span class="input-text">
                                            Senha&#42;
                                        </span>
                                    </span>
                                    {!! Form::password('password2', ['class' => 'form-control input-lg', 'placeholder' => 'Confirme sua senha', 'required' ]) !!}
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <span class="input-icon">
                                            <i class="fa fa-list"></i>
                                        </span>
                                        <span class="input-text">
                                            CPF&#42;
                                        </span>
                                    </span>
                                    {!! Form::text('cpf', null, ['id' => 'cpf', 'class' => 'form-control input-lg', 'placeholder' => 'Seu CPF', 'required' ]) !!}
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
                                    {!! Form::text('telefone', null, ['id' => 'telefone', 'class' => 'form-control input-lg', 'placeholder' => 'Seu telefone' ]) !!}
                                </div>

                                <input type="submit" value="ENVIAR" class="btn btn-custom-2 md-margin">
                            </fieldset>
                        </div>

                        <h2 class="sub-title">FORMAS DE PAGAMENTO</h2>

                        <!--Informar meio de pagamento -->
                        <div class="col-md-6 col-sm-6 col-xs-12 service-box-container">
                            <img src="{{asset('site/images/pagseguro.png')}}" data-href="https://pagseguro.uol.com.br/">
                            <div class="services-box">
                                <h3><a href="https://pagseguro.uol.com.br/" target="_blank">PagSeguro</a> <span class="small-bottom-border"></span></h3>
                                <p>Parcele em até 12x, o pagamento no cartão de crédito garante a você a compra dos produtos totalmente on-line, simples e rápido.</p>
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>
@stop