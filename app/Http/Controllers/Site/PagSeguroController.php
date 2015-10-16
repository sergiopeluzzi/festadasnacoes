<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use JulioBitencourt\Cart\Cart;
use PHPSC\PagSeguro\Customer\Address;
use PHPSC\PagSeguro\Customer\CustomerTest;
use JulioBitencourt\Cart\Session;
use JulioBitencourt\Cart\CartInterface;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutBuilderTest;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;

class PagSeguroController extends SiteController {

    protected $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

    public function pagamento(CheckoutService $checkoutService)
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $carrinho = $cart['items'];

        foreach($carrinho as $itens)
        {
            $checkout = $checkoutService->createCheckoutBuilder()
                ->addItem(new Item($itens['id'], $itens['description'], $itens['price'], $itens['quantity']))
                ->getCheckout();
        }

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

}
