<div class="form-group">
    {!! Form::label('nome', 'Nome') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
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
    <a href="/funcionarios" class="btn btn-danger">Voltar</a>
</div>