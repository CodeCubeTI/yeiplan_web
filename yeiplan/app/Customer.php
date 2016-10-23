<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function reservations() {
        return $this->hasMany('App\Reservation');
    }

    public function address() {
        return $this->hasOne('App\Address');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
