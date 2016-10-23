<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagesType extends Model
{
    /**
* The database table used by the model.
*
* @var string
*/
    protected $table = 'packagestypes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [];

    public function package() {
        return $this->belongsTo('App\Package');
    }

}
