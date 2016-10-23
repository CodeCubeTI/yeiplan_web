<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'suppliers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function address() {
        return $this->hasOne('App\Address');
    }

    public function services() {
        return $this->hasMany('App\Service');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
