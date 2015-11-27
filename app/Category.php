<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Array values that can be mass assigned.
     * 
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * A category contains many listings.
     * 
     * @return Listing class 
     */
    public function listings()
    {
        return $this->hasMany('App\Listing');
    }
}
