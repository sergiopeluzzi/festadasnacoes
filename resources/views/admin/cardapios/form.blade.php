<div class="form-group">
    {!! Form::label('descricao', 'Descrição') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('id_evento', 'Evento') !!}
    {!! Form::select('id_evento', $evento, null, ['class' => 'form-control']) !!}
</div>

<div class="box box-danger">
    <div class="box-header">
        <h3 class="box-title">Pratos:</h3>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="form-group col-md-6">
                {!! Form::label('id_prato', 'Nação - Prato') !!}
                {!! Form::select('id_prato', $prato, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group col-md-2">
                {!! Form::hidden('id_prats', null, ['class' => 'form-control']) !!}
                {!! Form::input('button', 'add', 'Adicionar', ['class' => 'btn btn-danger', 'style' => 'margin-top:24px', 'onClick' => "adicionar('id_produto')"]) !!}
            </div>
        </div>
        <hr/>
        <div class="row">
            <table id="tb_pratos" class="table table-bordered table-hover">
                <thead class="bg-red">
                <tr>
                    <th class="text-center no-padding">Código</th>
                    <th class="text-center no-padding">Descrição</th>
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
    {!! Form::submit($botao, ['class' => 'btn btn-danger', 'onClick' => "pegadados(this.form.id_prats)"]) !!}
    <a href="/admin/cardapios" class="btn btn-danger">Voltar</a>
</div>