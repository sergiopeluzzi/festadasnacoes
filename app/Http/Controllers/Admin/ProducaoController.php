<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nacao;
use App\PedidoPrato;
use App\Prato;
use App\Ingrediente;
use App\Produto;
use App\Unidade;
use Illuminate\Http\Request;

class ProducaoController extends AdminController {

    public function index()
    {
        $nomeForm = 'Gerenciar Produção';

        $nacoes = Nacao::all();

        $pedidoPrato = PedidoPrato::all();

        $ingredientes = Ingrediente::all();

        $prato = new Prato;

        $unidade = new Unidade;

        $produto = new Produto;

        $total = 0;

        return view('admin.producao.index', compact('nomeForm', 'nacoes', 'pedidoPrato', 'prato', 'ingredientes', 'produto', 'unidade', 'total'));
	}
}
