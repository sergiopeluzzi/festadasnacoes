    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="panel" align="center">
                    <div class="panel-heading bg-red">
                        Acesso Negado
                    </div>
                    <div class="panel-body text-center">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p>
                            Você não tem permissão para acessar este conteúdo!
                        </p>
                        <a href="/">Clique aqui para voltar para o site!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
