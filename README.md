# Projeto de TCC - Festa das Nações

### UNESC - Faculdades Integradas de Cacoal - Curso de Análise e Desenvolvimento de Sistemas
Acadêmicos: Sergio Peluzzi e Diego Noronha

## Objetivo
Desenvolver uma aplicação que gerencie um evento regional chamado Festa das Nações, vendendo vouchers de produtos alimentícios online e controlando as vendas e produção dos pratos para o dia da festa.

## Requerimentos
<li> [Git] (http://git-scm.com/downloads) 
<li> [Composer] (https://getcomposer.org/)
<li> [PHP 5.4+] (http://php.net/downloads.php)
<li> [Laravel 5 Framework] (https://github.com/laravel/laravel)
<li> [MySql Server] (https://www.mysql.com/)

## Modo de Instalação
<p><li>Clone o repositorio [festadasnacoes] (https://github.com/sergiopeluzzi/festadasnacoes) no github em uma pasta qualquer.
<p>git clone https://github.com/sergiopeluzzi/festadasnacoes.git
<p>
<p><li>Acesse a pasta e rode o composer:
<p>composer install
<p>
<p><li>Ainda dentro da pasta, renomeie o arquivo .env.example para .env e configure a conexão com o banco MySql
<p>DB_HOST, DB_USERNAME, DB_PASSWORD e DB_DATABASE
<p>
<p><li>Em seguida execute o comando php artisan migrate. Se ocorreu tudo OK, execute o comando php artisan serve
<p>Se não houver algum sinistro, o acesso à aplicação está liberado no seu [Localhost](http://localhost:8000)




