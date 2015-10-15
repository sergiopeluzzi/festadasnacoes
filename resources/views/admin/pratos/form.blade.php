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

<div class="box box-danger">
    <div class="box-header">
        <h3 class="box-title">Ingredientes:</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6">
                {!! Form::label('id_produto', 'Produtos') !!}
                {!! Form::select('id_produto', $produto, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-1">
                {!! Form::label('qnt', 'Qnt') !!}
                {!! Form::text('qnt', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group col-md-2">
                {!! Form::hidden('id_prods', null, ['class' => 'form-control']) !!}
                {!! Form::input('button', 'add', 'Adicionar', ['class' => 'btn btn-danger', 'style' => 'margin-top:24px', 'onClick' => "adicionar('id_produto')"]) !!}
            </div>

        </div>
        <hr/>
        <div class="row">
            <table id="tb_ingredientes" class="table table-bordered table-hover">
                <thead class="bg-red">
                <tr>
                    <th class="text-center no-padding">Código</th>
                    <th class="text-center no-padding">Descrição</th>
                    <th class="text-center no-padding">Qnt</th>
                    <th class="text-center no-padding">Ações</th>
                </tr>
                </thead>
                <tbody id="lista">

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="form-group">
    {!! Form::submit($botao, ['class' => 'btn btn-danger', 'onClick' => "pegadados(this.form.id_prods)"]) !!}
    <a href="/admin/pratos" class="btn btn-danger">Voltar</a>
</div>