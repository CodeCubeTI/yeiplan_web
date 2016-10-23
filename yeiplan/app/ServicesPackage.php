<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'servicespackages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function package() {
        return $this->hasOne('App\Package');
    }

    public function service() {
        return $this->hasOne('App\Service');
    }

}
