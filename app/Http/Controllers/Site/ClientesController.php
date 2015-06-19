<?php namespace App\Http\Controllers\Site;

use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\ClientesRequest;
use App\User;
use App\Evento;
use App\Nacao;
use App\Prato;
use Illuminate\Support\Facades\Auth;
use JulioBitencourt\Cart\CartInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;


class ClientesController extends SiteController {

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

        return view('site.cadastrar', compact('evento', 'nacoes', 'pratos', 'cart', 'carrinho'));
    }

    public function store(ClientesRequest $request)
    {
        $dados = $request->all();

        $usuario = [
            'name' => $dados['nome'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
            'id_users_tipo' => 3
        ];

        User::create($usuario);

        $dados['id_user'] = User::orderby('created_at', 'desc')->first()->id;

        $permissao = User::orderby('created_at', 'desc')->first();
        $permissao->attachRole(3);

        Cliente::create($dados);

        return redirect('/cadastrar/sucesso');
    }

    public function show(Cliente $cliente)
    {
        $nomeForm = 'Clientes';

        $usuario = User::findOrFail($cliente->id_user);

        return view('admin.clientes.show', compact('nomeForm', 'cliente', 'usuario'));
    }

    public function edit(Cliente $cliente)
    {
        $nomeForm = 'Clientes';

        return view('admin.clientes.edit', compact('nomeForm', 'cliente'));
    }

    public function update(Cliente $cliente, ClientesRequest $request)
    {
        $nomeForm = 'Clientes';

        $cliente->update($request->all());

        flash()->success('Cliente atualizado com sucesso');

        return redirect('admin/clientes');
    }

    public function sucesso()
    {
        $cart = [
            'items' => $this->cart->all(),
            'count' => $this->cart->totalItems(),
            'total' => $this->cart->total()
        ];

        $nacoes = Nacao::all();

        $carrinho = $this->cart->all();

        return view('site.sucesso2', compact('cart', 'carrinho', 'nacoes'));

    }
}
