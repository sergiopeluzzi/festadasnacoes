<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProducaoController extends AdminController {

    public function index()
    {
        $nomeForm = 'Gerenciar Produção';

        return view('admin.producao.index', compact('nomeForm'));
	}
}
