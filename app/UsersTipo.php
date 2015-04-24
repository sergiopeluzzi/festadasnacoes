<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersTipo extends Model {

    protected $table = 'users_tipo';

    protected $fillable = ['descricao'];

    /**
     * Relacionamento User com UserTipo 1 : N
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasMany('App\User');
    }

}
