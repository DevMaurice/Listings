<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
     /**
     * Returns the view that displays all the listing
     * 
     * @return view
     */
    public function index()   
    {
        $listings=Listing::with('category')->paginate(15);

        return view('page.home')
                ->with('listings',$listings);
    }

    /**
     * Returns the search result from the homepage form
     * 
     * @param  Request $request 
     * @return View view
     */
    public function search(Request $request)
    {
        $loc=Input::get('location'); 
        $category=Input::get('category_id');
        $max=Input::get('amount');
      

            $listings=Listing::location($loc)
                ->minimumAmount($max)
                ->category($category)
                ->with('category')
                ->get();
        
          return view('page.home')
                ->with('listings',$listings);
    }

    /**
     * Returns result of a given category of listing into a view
     * 
     * @param  $name Name of the category
     * @return View view
     */
    public function searchCategory($name)
    {        
        $cate=Category::where('name',$name)->first(); 

        return view('page.home')
                ->with('listings',$cate->listings);
    }

    public function show($id)
    {
        $listing=Listing::findorFail($id);
        return view('page.show')
                 ->with('listing',$listing);                
       // return $listing;
    }
}