<div class="form-group">
    {!! Form::label('descricao', 'Descrição') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('valor', 'Valor R$') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_nacao', 'Nação') !!}
    {!! Form::select('id_nacao', $nacao, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger']) !!}
    <a href="/admin/pratos" class="btn btn-danger">Voltar</a>
</div>