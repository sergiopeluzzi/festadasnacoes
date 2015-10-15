<?php namespace App\Http\Controllers;

use App\Evento;
use App\Http\Requests;
use App\Nacao;
use App\Prato;
use App\Cliente;
use App\Bebida;
use JulioBitencourt\Cart\Cart;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller {

    protected $cart;
    protected $evento;
    protected $nacoes;
    protected $pratos;
    protected $dados;

    public function __construct(Cart $cart, Evento $evento, Nacao $nacoes, Prato $pratos)
    {
        $this->cart = $cart;
        $this->evento = $evento;
        $this->nacoes = $nacoes;
        $this->pratos = $pratos;
        $this->dados = [];
    }

    public function index()
    {
        $this->dados['evento'] = $this->evento->latest()->first();

        $this->dados['nacoes'] = $this->nacoes->all();

        $this->dados['pratos'] = $this->pratos->all();

        //$bebidas = Bebida::all();

        $this->dados['cart'] = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $this->dados['carrinho'] = $this->cart->all();

        return view('site.index')->with($this->dados);
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

        $cliente = new Cliente;

        return view('site.minhaconta', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho', 'cliente'));
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
