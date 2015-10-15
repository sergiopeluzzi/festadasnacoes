<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

	protected $table = 'produtos';

    protected $fillable = ['descricao', 'id_unidade', 'valor'];

    public function unidade()
    {
        return $this->belongsTo('App\Unidade');
    }

    public function prato()
    {
        return $this->belongsToMany('App\Prato');
    }
}
