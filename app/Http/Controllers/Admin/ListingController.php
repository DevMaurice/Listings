<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListingCreateRequest;
use App\Http\Requests\ListingUpdateRequest;
use App\Listing;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Listing $listing)
    {
        $model = 'listing';

        return view('admin.listing.index')
                ->with('listings', $listing->latest()->with('category')->get())
                ->with('model', $model);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = Category::lists('name', 'id')->all();

        return view('admin.listing.create_edit', compact('options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ListingCreateRequest $request)
    {
        $listing = new Listing();

        $listing->name = $request->input('name');
        $listing->category_id = $request->input('category_id');
        $listing->location = $request->input('location');
        $listing->amount = $request->input('amount');

        if (Input::hasFile('photo')) {
            $photoName = Input::file('photo')->getClientOriginalName();

            Input::file('photo')->move(public_path().'/pics/', $photoName);

            $listing->photo = $photoName;
        }
        $listing->save();

        Flash::success('A Listing has been created');

        return redirect('/listing');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        $options = Category::lists('name', 'id')->all();

        return view('admin.listing.show', compact('listing', 'options'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        $options = Category::lists('name', 'id')->all();

        return view('admin.listing.create_edit', compact('listing', 'options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Responsen
     */
    public function update(ListingUpdateRequest $request, Listing $listing)
    {
        $listing->name = $request->input('name');
        $listing->category_id = $request->input('category_id');
        $listing->location = $request->input('location');
        $listing->amount = $request->input('amount');

        if (Input::hasFile('photo')) {
            $photoName = Input::file('photo')->getClientOriginalName();

            Input::file('photo')->move(public_path().'/pics/', $photoName);

            $listing->photo = $photoName;
        }

        $listing->update();

        Flash::success('A listing has been Updated');

        return redirect('/listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        Flash::success('A Listing has been deleted');

        return redirect('/listing');
    }
}
