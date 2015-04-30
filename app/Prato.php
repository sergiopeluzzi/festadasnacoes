<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Prato extends Model {

	protected $table = 'pratos';

    protected $fillable = ['id_nacao', 'descricao', 'valor'];

    public function nacao()
    {
        return $this->belongsTo('App\Nacao');
    }

    public function produto()
    {
        return $this->hasMany('App\Produto');
    }

}
