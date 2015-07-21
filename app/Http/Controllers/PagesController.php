<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home()
    {
        $tags = \App\Tag::all();
        // Get an array of Location IDs
        $listLocations = \App\Location::lists('id')->toArray();
        // Picks a random entry out of an array
        $randArrayID = array_rand($listLocations);
        // Get Location by ID
        $location = \App\Location::find($listLocations[$randArrayID]);

        return view('locations.home', compact('location'));
    
    }
}
