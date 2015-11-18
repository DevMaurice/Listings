<?php

namespace App;

use App\Listing;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
	 * Array values that can be mass assigned
	 * 
	 * @var array
	 */
    protected $fillable=['name'];

    /**
     * A category contains many listings
     * 
     * @return App\Listing::class 
     */
    public function listings(){

    	return $this->hasMany('App\Listing');
    }
}
