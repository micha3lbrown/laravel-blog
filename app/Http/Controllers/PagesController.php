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
        // Get random location
        $location = Location::all()->random();
        // Get all tags
        $tags = Tag::lists('name', 'id');

        return view('locations.home', compact('location', 'tags'));
    }
}
