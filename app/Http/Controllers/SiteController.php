<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use App\Nacao;
use App\Prato;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller {

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

        return view('site.index', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
	}

    public function cadastrar()
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

        return view('site.cadastrar', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function minhaconta()
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

        return view('site.minhaconta', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function meuspedidos()
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

        return view('site.meuspedidos', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function meucarrinho()
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

        return view('site.meucarrinho', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function finalizar()
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

        return view('site.finalizar', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function contato()
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

        return view('site.contato', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }
}
