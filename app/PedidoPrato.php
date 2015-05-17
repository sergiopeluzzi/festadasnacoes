<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoPrato extends Model {

	protected $table = 'pedidos_pratos';

    protected $fillable = ['id_pedido', 'id_prato'];

}
