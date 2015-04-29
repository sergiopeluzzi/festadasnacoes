<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nacao extends Model {

	protected $table = 'nacoes';

    protected $fillable = ['nome', 'descricao'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function evento()
    {
        return $this->belongsToMany('App\Evento');
    }

}
