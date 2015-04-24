<?php namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests;
use App\Http\Requests\ClientesRequest;
use App\User;
use Illuminate\Support\Facades\Auth;


class ClientesController extends Controller {

    public function __construct()
    {
        $this->middleware('administrador', ['except' => ['show', 'index']]);
    }
    
    public function index()
    {
        $nomeForm = 'Clientes';

        $clientes = Cliente::all();

        return view('clientes.index', compact('nomeForm', 'clientes'));
    }

    public function create()
    {
        $nomeForm = 'Clientes';

        return view('clientes.create', compact('nomeForm'));
    }

    public function store(ClientesRequest $request)
    {
        /* Testar essa forma de store:
           $cliente = new Cliente($request->all());
        */

        $dados = $request->all();

        $usuario = [
            'name' => $dados['nome'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
            'id_users_tipo' => 3
        ];

        User::create($usuario);

        $dados['id_user'] = User::orderby('created_at', 'desc')->first()->id;

        Cliente::create($dados);

        flash()->success('Cliente cadastrado com sucesso');

        return redirect('clientes');
    }

    public function show(Cliente $cliente)
    {
        $nomeForm = 'Clientes';

        $usuario = User::findOrFail($cliente->id_user);

        return view('clientes.show', compact('nomeForm', 'cliente', 'usuario'));
    }

    public function edit(Cliente $cliente)
    {
        $nomeForm = 'Clientes';

        return view('clientes.edit', compact('nomeForm', 'cliente'));
    }

    public function update(Cliente $cliente, ClientesRequest $request)
    {
        $nomeForm = 'Clientes';

        $cliente->update($request->all());

        flash()->success('Cliente atualizado com sucesso');

        return redirect('clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $usuario = User::findOrFail($cliente->id_user);

        $cliente->delete();

        $usuario->delete();

        return redirect('clientes');
    }
}
