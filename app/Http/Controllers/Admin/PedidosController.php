<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PedidosRequest;
use App\Pedido;
use App\Cliente;
use App\Prato;
use App\Nacao;
use App\PedidoPrato;
use Illuminate\Http\Request;

class PedidosController extends AdminController {

    public function index()
    {
        $nomeForm = 'Gerenciar Vendas';

        $pedidos = Pedido::all();

        $pedidoPrato = PedidoPrato::all();

        $prato = new Prato;

        $nacoes = Nacao::all();

        $cliente = new Cliente;


        $valorTotal = Pedido::sum('valor');

        $qntTotal = Pedido::count('id');

        return view('admin.pedidos.index', compact('nomeForm', 'pedidos', 'cliente', 'valorTotal', 'qntTotal', 'pedidoPrato', 'prato', 'nacoes'));
	}

    public function show(Pedido $pedido)
    {
        $nomeForm = 'Pedido';

        $itens = PedidoPrato::where('id_pedido', $pedido->id)->get();

        $prato = new Prato;

        $cliente = new Cliente;

        return view('admin.pedidos.show', compact('nomeForm', 'pedido', 'itens', 'cliente', 'prato'));
    }

    public function baixar($id)
    {
        if(Pedido::find($id)->baixado == 1)
        {
            flash()->warning('Pedido ' . $id . ' já foi baixado');
        }
        else
        {
            flash()->success('Pedido ' . $id . ' baixado com sucesso');
        }

        Pedido::where('id', $id)->update(['baixado' => 1]);

        return redirect('admin/vendas');
    }

    public function busca()
    {
        $palavra = Input::get('q');

        $pedidos = Pedido::find($palavra);

        return view('admin.pedidos.index', compact('pedidos'));
    }

}
