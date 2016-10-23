<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'states';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function citys() {
        return $this->hasMany('App\City');
    }

}
