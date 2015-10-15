<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidoBebida extends Model {

	protected $table = 'pedidos_bebidas';

    protected $fillable = ['id_pedido', 'id_bebida'];

}
