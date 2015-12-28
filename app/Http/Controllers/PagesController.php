<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Tag;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
    	//Get Tags
        $tags = Tag::all();
 		//Get Locations
 		$locations = Location::where('active', 1)->get();
        $randomLocation = $locations->random();

        return view('locations.home', compact('locations', 'tags', 'randomLocation'));
    }

    public function food()
    {

    }

    public function filter(Request $request)
    {
    	dd($request);
    }
}
