<div class="form-group">
    {!! Form::label('descricao', 'Descrição') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_unidade', 'Unidade') !!}
    {!! Form::select('id_unidade', $unidade, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger']) !!}
    <a href="/admin/produtos" class="btn btn-danger">Voltar</a>
</div>