<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceReservation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicesreservations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function service() {
        return $this->hasOne('App\Service');
    }

    public function reservation() {
        return $this->hasOne('App\Reservation');
    }

}
