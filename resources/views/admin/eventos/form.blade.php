<div class="form-group">
    {!! Form::label('descricao', 'Descrição') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('dataInicial', 'Data Inicial') !!}
    {!! Form::input('dataInicial', 'date', null, ['class' => 'form-control', 'placeholder' => 'DD/MM/AAAA']) !!}
</div>

<div class="form-group">
    {!! Form::label('dataFinal', 'Data Final') !!}
    {!! Form::input('dataFinal', 'date', null, ['class' => 'form-control', 'placeholder' => 'DD/MM/AAAA']) !!}
</div>

<div class="form-group">
    {!! Form::label('dataLimite', 'Data Limite para Compras') !!}
    {!! Form::input('dataLimite', 'date', null, ['class' => 'form-control', 'placeholder' => 'DD/MM/AAAA']) !!}
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger']) !!}
    <a href="/admin/eventos" class="btn btn-danger">Voltar</a>
</div>