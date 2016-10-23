<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'billings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }

}
