<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }

    public function supplier() {
        return $this->belongsTo('App\Supplier');
    }

    public function reservation() {
        return $this->belongsTo('App\Reservation');
    }
}
