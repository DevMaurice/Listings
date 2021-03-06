<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    /**
     * Mass assignable fields.
     * 
     * @var array
     */
    protected $fillable = ['name','category_id','location','amount'];

    /**
     * A listing is in a given category.
     * 
     * @return App\Category::class
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Scope query to return listing with less than amount.
     * 
     * @param   $query
     * @param   $amount
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMinimumAmount($query, $amount)
    {
        if (!isset($amount)) {
            return $query;
        }

        return $query->where('amount', '<=', $amount);
    }

    /**
     * Scope query to return listing with this location.
     * 
     * @param   $query
     * @param   $location
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLocation($query, $location)
    {
        if (!isset($location)) {
            return $query;
        }

        return $query->where('location', 'like', '%'.$location.'%');
    }

    /**
     * Returns all Listings of this category.
     *
     * @param   $query
     * @param   $category
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCategory($query, $category)
    {
        if (!isset($category)) {
            return $query;
        }

        return $query->where('category_id', $category);
    }
}
