<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model {

	protected $table = 'cardapios';

    protected $fillable = ['id_evento', 'descricao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo('App\Evento');
    }

    public function prato()
    {
        return $this->hasMany('App\Prato');
    }

}
