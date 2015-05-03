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
                    {!! Form::open(['id' => 'frmPratos', 'url' => 'admin/pratos']) !!}
                        @include ('admin.pratos.form', ['botao' => 'Salvar'])
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

        document.getElementById('qnt').value = 0;
        document.getElementById('id_produto').selectedIndex = 0;

        function removeElement(id) {
            var lista = document.getElementById('lista');
            var elemento = document.getElementById(id);
            lista.removeChild(elemento);
        }

        function adicionar(id) {
            var produtos = document.getElementById('id_produto');
            var idProd = produtos.options[produtos.selectedIndex].value;
            var descProd = produtos.options[produtos.selectedIndex].text;
            var qntProd = document.getElementById('qnt').value;
            var lista = document.getElementById('lista');

            if (qntProd <= 0) {
                alert('Quantidade informada inváilida!');
                return;
            }

            if(document.getElementById('item_'+idProd)){
                alert('Este produto já está na lista');
                removeElement('item_' + idProd);
                return;
            }

             var dado = '<tr id="item_'+idProd+'">' +
                            "<td class='text-center'>" + idProd + "</td>" +
                            "<td>" + descProd + "</td>" +
                            "<td class='text-center'>" + qntProd + "</td>" +
                            '<td class="text-center"><a class="glyphicon glyphicon-remove" onclick="removeElement(\'item_'+idProd+'\')" href="javascript:void(0);"></a></td>' +
                        '</tr>';

            // Pega o codigo HTML dento da lista e adiciona novos registros.
            lista.innerHTML = lista.innerHTML + dado;

            document.getElementById('qnt').value = 0;
            document.getElementById('id_produto').selectedIndex = 0;
        }

    </script>

@stop