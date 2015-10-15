@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading bg-red">
                    Adicionar {{ $nomeForm }}
                </div>
                <div class="panel-body">
                    {!! Form::open(['id' => 'frmCardapios', 'url' => 'admin/cardapios']) !!}
                        @include ('admin.cardapios.form', ['botao' => 'Salvar', 'cardapioPratos' => null])
                    {!! Form::close() !!}
                </div>
                @include ('errors.list')
            </div>
        </div>
    </div>
</div>
@stop

@section('scripts')

    <script type="text/javascript">

        document.getElementById('id_prato').selectedIndex = 0;

        function removeElement(id) {
            var lista = document.getElementById('lista');
            var elemento = document.getElementById(id);
            lista.removeChild(elemento);
        }

        function adicionar(id) {
            var pratos = document.getElementById('id_prato');
            var idPrato = pratos.options[pratos.selectedIndex].value;
            var descPrato = pratos.options[pratos.selectedIndex].text;
            var lista = document.getElementById('lista');

            if(document.getElementById('item_'+idPrato)){
                alert('Este prato já está na lista');
                return;
            }

            var dado = '<tr id="item_'+idPrato+'">' +
                    "<td class='text-center'>" + idPrato + "</td>" +
                    "<td>" + descPrato + "</td>" +
                    '<td class="text-center"><a class="glyphicon glyphicon-remove" onclick="removeElement(\'item_'+idPrato+'\')" href="javascript:void(0);"></a></td>' +
                    '</tr>';

            // Pega o codigo HTML dento da lista e adiciona novos registros.
            lista.innerHTML = lista.innerHTML + dado;

            document.getElementById('id_prato').selectedIndex = 0;
        }

        function pegadados(hidden) {
            var grid = document.getElementById('tb_pratos');
            var linhas = grid.rows.length;
            var ids = new Array();

            for (var i = 0; i < linhas; i++) {
                var reg = grid.rows[i];
                var id = reg.childNodes[0];

                ids[i] = id.innerHTML;
            }

            ids.shift();

            hidden.value = ids;
        }

    </script>

@stop