<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PedidosRequest;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Http\Request;
use JulioBitencourt\Cart\Session;
use App\Nacao;

class FinalizarController extends SiteController  {

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $carrinho = $this->cart->all();

        $nacao = new Nacao;

        return view('site.finalizar', compact('cart', 'carrinho', 'nacao'));
	}

    public function fechar(PedidosRequest $request)
    {
        $dados = $request->all();

        dd($dados);

        return url('site.index');
    }

}
