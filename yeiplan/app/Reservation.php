<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function customer() {
        return $this->hasOne('App\Customer');
    }

    public function services() {
        return $this->belongsToMany('App\ServicesReservation');
    }

}
