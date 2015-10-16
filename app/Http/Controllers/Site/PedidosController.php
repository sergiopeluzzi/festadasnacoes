<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\PedidoPrato;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Http\Request;
use JulioBitencourt\Cart\Session;
use App\Nacao;
use App\Prato;
use App\Cliente;
use App\Pedido;
use Illuminate\Support\Facades\Auth;

class PedidosController extends SiteController  {

    protected $cart;

    public function __construct(Cart $cart)
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

        $nacoes = Nacao::all();

        $prato = new Prato;

        if(Auth::user())
        {
            $cliente = Cliente::where('id_user', Auth::user()->id)->first();

            $pedidos = Pedido::where('id_cliente', $cliente->id)->get();
        }

        $pedidosPratos = new PedidoPrato;

        return view('site.meuspedidos', compact('cart', 'carrinho', 'nacao', 'cliente', 'pedidos', 'prato', 'pedidosPratos', 'nacoes'));
	}

}
