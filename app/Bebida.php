<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model {

	protected $table = 'bebidas';

    protected $fillable = ['descricao', 'valor'];

    public function cardapio()
    {
        return $this->belongsToMany('App\Cardapio');
    }

    public function pedido()
    {
        return $this->belongsToMany('App\Pedido');
    }

}
