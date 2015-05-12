<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use JulioBitencourt\Cart\CartInterface;

use Illuminate\Support\Facades\Session;

class CarrinhoController extends Controller {

    protected $cart;

    /**
     * Create a new controller instance.
     *
     * @param CartInterface $cart
     */
    public function __construct(CartInterface $cart)
    {
        $this->cart = $cart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $carrinho = $this->cart->all();

        return view('site.meucarrinho', compact('cart', 'carrinho'));

    }

    public function add($id)
    {
        $prato = Prato::findOrFail($id);

        $item = [
            'sku' => $prato->id,
            'description' => $prato->descricao,
            'price' => $prato->valor,
            'quantity' => 1
        ];

        $result = $this->cart->insert($item);

        flash()->success('Prato adicionado ao carrinho');

        return redirect('/');
    }

    public function remover($id)
    {
        $this->cart->delete($id);

        return redirect('/meucarrinho');
    }

    public function remover2($id)
    {
        $this->cart->delete($id);

        return redirect('/');
    }
}
