<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model {

	protected $table = 'ingredientes';

    protected $fillable = ['id_prato', 'id_produto', 'qnt'];

}
