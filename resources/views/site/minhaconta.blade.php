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
                <div class="col-md-12">
                    <header class="content-title">
                        <div class="title-bg">
                            <h2 class="title">Minha conta</h2>
                        </div>

                        <p>Verifique os seus dados, é importante para segurança do seu pedido</p>
                    </header>
                    <div class="xs-margin"></div>

                    <!-- Informar dados para cadastro -->
                    <form action="#" id="register-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset><h2 class="sub-title">DADOS DO CLIENTE</h2>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"> <i class="fa fa-user"></i></span><span class="input-text">Nome</span></span>
                                        <input type="text" required class="form-control input-lg"
                                               placeholder="Seu nome">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-envelope"></i></span><span class="input-text">E-mail</span></span>
                                        <input type="email" required class="form-control input-lg"
                                               placeholder="Seu e-mail">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-lock"></i></span><span class="input-text">Senha</span></span>
                                        <input type="password" required class="form-control input-lg"
                                               placeholder="Sua senha">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-list"></i></span><span class="input-text">CPF</span></span>
                                        <input type="text" class="form-control input-lg" id="cpf" placeholder="Seu CPF">
                                    </div>

                                    <div class="input-group"><span class="input-group-addon"><span
                                                    class="input-icon"><i class="fa fa-mobile fa-2x"></i></span><span class="input-text">Telefone</span></span>
                                        <input type="text" class="form-control input-lg" id="telefone" placeholder="Seu telefone">
                                    </div>
                                    <input type="submit" value="ENVIAR" class="btn btn-custom-2 md-margin">
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

                    </form>
                </div>
            </div>
        </div>
    </section>
 @stop