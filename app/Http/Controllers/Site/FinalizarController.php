<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PedidosRequest;
use App\Pedido;
use App\PedidoPrato;
use Carbon\Carbon;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JulioBitencourt\Cart\Session;
use App\Nacao;
use App\Prato;
use App\Cliente;

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

        $nacao = new Nacao;

        $prato = new Prato;

        $carrinho = $this->cart->all();

        return view('site.finalizar', compact('cart', 'carrinho', 'nacao', 'prato'));
	}

    public function fechar(PedidosRequest $request)
    {
        $dados = $this->cart->all();

        $cliente = Cliente::where('id_user', Auth::user()->id)->first()->id;

        $pedido = new Pedido;
        $pedido->id_cliente = $cliente;
        $pedido->valor = $this->cart->total();
        $pedido->data = Carbon::now();
        $pedido->save();

        foreach($dados as $pratos)
        {
            $pedidoPrato = new PedidoPrato;
            $pedidoPrato->id_pedido = Pedido::latest()->first()->id;
            $pedidoPrato->id_prato = $pratos['sku'];
            $pedidoPrato->qnt = $pratos['quantity'];
            $pedidoPrato->save();
        }

        $this->cart->destroy();


        return redirect('/finalizar/sucesso');
    }

    public function sucesso()
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $nacao = new Nacao;

        $prato = new Prato;

        $carrinho = $this->cart->all();

        return view('site.sucesso', compact('cart', 'carrinho'));

    }

}
