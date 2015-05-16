<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Http\Request;
use JulioBitencourt\Cart\Session;
use App\Nacao;

class PedidosController extends SiteController  {

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

        return view('site.meuspedidos', compact('cart', 'carrinho', 'nacao'));
	}

}
