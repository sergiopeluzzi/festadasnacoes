<?php namespace App\Http\Controllers\Site;

use App\Cardapio;
use App\CardapioPrato;
use App\Evento;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CardapiosRequest;
use App\Nacao;
use App\Prato;
use Illuminate\Http\Request;
use JulioBitencourt\Cart\CartInterface;

class CardapiosController extends SiteController {

    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    public function prato($id)
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

        return view('site.cardapio.' . $id, compact('nacoes', 'cart', 'carrinho'));
	}

}