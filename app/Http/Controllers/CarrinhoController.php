<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PratosRequest;
use App\Prato;
use App\Nacao;
use App\Evento;
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
    public function __construct(Cart $cart)
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

        $nacao = new Nacao;

        $nacoes = Nacao::all();

        $prato = new Prato;

        $carrinho = $this->cart->all();

        return view('site.meucarrinho', compact('cart', 'carrinho', 'nacao', 'prato', 'nacoes'));

    }

    public function add($id)
    {
        $prato = Prato::findOrFail($id);

        $nacao = Nacao::findOrFail($prato->id_nacao);

        $item = [
            'sku' => $prato->id,
            'description' => $prato->descricao,
            'price' => $prato->valor,
            'quantity' => 1,
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

    public function diminuir($id)
    {
        $lista = $this->cart->all();

        for ($i = 0; $i < count($lista); $i++)
        {
            if($lista[$i]['id'] == $id)
            {
                $qnt = $lista[$i]['quantity'];
            }

        }

        $result = $this->cart->update($id, $qnt - 1);

        return redirect('/meucarrinho');
    }

    public function add2($id)
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

        return redirect('/meucarrinho');
    }

}
