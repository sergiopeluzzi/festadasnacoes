<?php namespace App\Http\Controllers;

use App\Funcionario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\FuncionariosRequest;
use App\User;
use App\UsersTipo;
use Illuminate\Http\Request;

class FuncionariosController extends Controller {

    public function __construct()
    {
        $this->middleware('administrador', ['except' => ['show', 'index']]);
    }

    public function index()
    {
        $nomeForm = 'Funcionarios';

        $funcionarios = Funcionario::all();

        return view('admin.funcionarios.index', compact('nomeForm', 'funcionarios'));
	}

    public function create()
    {
        $nomeForm = 'Funcionarios';

        return view('admin.funcionarios.create', compact('nomeForm'));
    }

    public function store(FuncionariosRequest $request)
    {
        $dados = $request->all();

        $usuario = [
            'name' => $dados['nome'],
            'email' => $dados['email'],
            'password' => bcrypt($dados['password']),
            'id_users_tipo' => $dados['id_users_tipo']
        ];

        User::create($usuario);

        $dados['id_user'] = User::latest()->first()->id;

        Funcionario::create($dados);

        flash()->success('Funcionário cadastrado com sucesso');

        return redirect('admin/funcionarios');
    }

    public function show(Funcionario $funcionario)
    {
        $nomeForm = 'Funcionários';

        $usuario = User::findOrFail($funcionario->id_user);

        $usuario_tipo = UsersTipo::findOrFail($usuario->id_users_tipo);

        return view('admin.funcionarios.show', compact('nomeForm', 'funcionario', 'usuario', 'usuario_tipo'));
    }

    public function edit(Funcionario $funcionario)
    {
        $nomeForm = 'Funcionários';

        return view('admin.funcionarios.edit', compact('nomeForm', 'funcionario'));
    }

    public function update(Funcionario $funcionario, FuncionariosRequest $request)
    {
        $nomeForm = 'Funcionários';

        $funcionario->update($request->all());

        flash()->success('Funcionário atualizado com sucesso');

        return redirect('admin/funcionarios');
    }

    public function destroy(Funcionario $funcionario)
    {
        $usuario = User::findOrFail($funcionario->id_user);

        $funcionario->delete();

        $usuario->delete();

        flash()->success('Funcionário excluído com sucesso');

        return redirect('admin/funcionarios');
    }
}
