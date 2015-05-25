<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nacao;
use App\Evento;
use App\Prato;
use Illuminate\Http\Request;
use JulioBitencourt\Cart\CartInterface;

class ContatosController extends SiteController
{

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $evento = Evento::latest()->first();

        $nacoes = Nacao::all();

        $pratos = Prato::all();

        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $carrinho = $this->cart->all();

        return view('site.contato', compact('nacoes', 'pratos', 'evento', 'cart', 'carrinho'));
	}

}
