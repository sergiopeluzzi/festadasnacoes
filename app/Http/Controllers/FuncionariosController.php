<?php namespace App\Http\Controllers;

use App\Funcionario;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FuncionariosController extends Controller {

    public function index()
    {
        $nomeForm = 'Funcionarios';

        $funcionarios = Funcionario::all();

        return view('funcionarios.index', compact('nomeForm', 'funcionarios'));
	}

    public function create()
    {
        $nomeForm = 'Funcionarios';

        return view('funcionarios.create', compact('nomeForm'));
    }
}
