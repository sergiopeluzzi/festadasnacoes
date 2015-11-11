<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PedidosRequest;
use App\Pedido;
use App\PedidoPrato;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use JulioBitencourt\Cart\Cart;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JulioBitencourt\Cart\Session;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutBuilderTest;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;
use App\Nacao;
use App\Prato;
use App\Cliente;

class FinalizarController extends SiteController  {

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

        $nacao = new Nacao;

        $nacoes = Nacao::all();

        $prato = new Prato;

        $carrinho = $this->cart->all();

        return view('site.finalizar', compact('cart', 'carrinho', 'nacao', 'prato', 'nacoes'));
	}

    public function fechar(CheckoutService $checkoutService, PedidosRequest $request)
    {
        $dados = $this->cart->all();

        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $cliente = Cliente::where('id_user', Auth::user()->id)->first()->id;

        $carrinho = $cart['items'];

        $checkout = $checkoutService->createCheckoutBuilder();

        foreach($carrinho as $itens)
        {
            $checkout=$checkout->addItem(new Item($itens['id'], $itens['description'], $itens['price'], $itens['quantity']));
        }

        $checkout=$checkout->getCheckout();

        $response = $checkoutService->checkout($checkout);

        $pedido = new Pedido;
        $pedido->id_cliente = $cliente;
        $pedido->valor = $this->cart->total();
        $pedido->data = Carbon::now();
        $pedido->baixado = 0;
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

        return redirect($response->getRedirectionUrl());

    }

    public function sucesso(Request $request)
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $transacao = $request->get('transaction_id');

        $nacoes = Nacao::all();

        $carrinho = $this->cart->all();

        $ultiPedido = Pedido::latest()->first();

        $cliente = Cliente::find($ultiPedido->id_cliente);

        Mail::send('emails.email', ['cliente' => $cliente, 'pedido' => $ultiPedido, 'transacao' => $transacao], function ($m) use ($cliente) {
            $m->to($cliente->email, $cliente->nome)->subject('Festa das Nações - PEDIDO');
        });

        return view('site.sucesso', compact('cart', 'carrinho', 'nacoes', 'transacao'));

    }

    public function falha()
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $nacoes = Nacao::all();

        $carrinho = $this->cart->all();

        return view('site.falha', compact('cart', 'carrinho', 'nacoes'));

    }

}
