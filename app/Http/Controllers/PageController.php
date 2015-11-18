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
    protected $categories;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct() {

        $this->categories = Category::all();
    }
    public function index()   {
       

        $listings=Listing::with('category')->paginate(15);

        return view('page.home')
                ->with('categories',$this->categories)
                ->with('listings',$listings);
    }

    public function search(Request $request)
    {
        $loc=Input::get('location'); 
        $category=Input::get('category_id');
        $max=Input::get('amount');

        // $listings= DB::table('listings')
        //     ->where('location', 'like', '%'.$loc.'%')
        //     ->where('amount','<=',$max)
        //     ->where('$category_id','=', $category)
        //     ->get();
        if(isset($category)){
            $listings=Listing::location($loc)->minimumAmount($max)->category($category)->get();
        }
         $listings=Listing::location($loc)->minimumAmount($max)->get();

          return view('page.home')
                ->with('listings',$listings)
                ->with('categories',$this->categories);
    }

    public function searchCategory($name){        
        $cate=Category::where('name',$name)->first(); 

        // $listngs=DB::table('listings')->where('id',$cate['id'])->get();

        return view('page.home')
                ->with('listings',$cate->listings)
                ->with('categories',$this->categories);
        // return $cate;
    }
}