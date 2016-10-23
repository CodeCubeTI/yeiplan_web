<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'packages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function services() {
        return $this->belongsToMany('App\Service');
    }

    public function packagestype() {
        return $this->hasOne('App\PackagesType');
    }

}
