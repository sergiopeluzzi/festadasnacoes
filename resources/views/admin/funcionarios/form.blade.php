<div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>
<!--
<div class="form-group">
    {!! Form::label('arquivo', 'Carregar Fotografia') !!}
    {!! Form::input('file', 'arquivo', null) !!}
</div>
-->
<div class="form-group">
    {!! Form::label('id_users_tipo', 'Tipo de Funcionário') !!}
    {!! Form::select('id_users_tipo', ['1' => 'Administrador', '2' => 'Funcionário'], null, ['class' => 'form-control'] ) !!}
</div>

<div class="form-group">
    {!! Form::label('cpf', 'CPF') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('telefone', 'Telefone') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'E-mail') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Senha') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password2', 'Confirme Senha') !!}
    {!! Form::password('password2', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger']) !!}
    <a href="/admin/funcionarios" class="btn btn-danger">Voltar</a>
</div>