<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function packages() {
        return $this->belongsToMany('App\Packages');
    }

    public function reservations() {
        return $this->belongsToMany('App\Reservation');
    }

    public static function filterAndPaginate($st){
        return Service::join('servicestypes', 'servicestypes.id', '=', 'servicestype_id')
            ->where('name_type', '=', $st)->paginate();
    }
}
