<div class="form-group">
    {!! Form::label('sigla', 'Sigla') !!}
    {!! Form::text('sigla', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('descricao', 'Descrição') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger']) !!}
    <a href="/admin/unidades" class="btn btn-danger">Voltar</a>
</div>