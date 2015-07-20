<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
use App\Tag;
use App\Http\Requests\LocationRequest;

class LocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }


    /**
     * Search for food
     *
     * @return Response
     */
    public function home()
    {
        // Get an array of Location IDs
        $listLocations = Location::lists('id')->toArray();
        // Picks a random entry out of an array
        $randArrayID = array_rand($listLocations);
        // Get Location by ID
        $location = Location::find($listLocations[$randArrayID]);

        return view('locations.home', compact('location'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::lists('name', 'id');
        return view('locations.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  LocationRequest  $request
     * @return Response
     */
    public function store(LocationRequest $request)
    {
;
        $location = Location::create($request->all());
        $location->tags()->attach($request->input('tag_list'));
        return redirect()->action('LocationsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Location $location
     * @return Response
     */
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Location $location
     * @return Response
     */
    public function edit(Location $location)
    {
        $tags = Tag::lists('name', 'id');
        return view('locations.edit', compact('location', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Location $location
     * @param  LocationRequest  $request
     * @return Response
     */
    public function update(Location $location, LocationRequest $request)
    {
        // dd($request->all());
        $location->update($request->all());
        $this->syncTags($location, (array) $request->input('tag_list'));
        return redirect()->action('LocationsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Location $location
     * @return Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return redirect()->action('LocationsController@index');
    }

    /**
     * Sync relations inside of locations_tags table
     *
     * @param  Location $location [Location Model]
     * @param  array    $tags     [array of tag id's]
     * @return true
     */
    private function syncTags(Location $location, array $tags)
    {
        // dd($tags);
        $location->tags()->sync($tags);
    }

    /**
     * Save a new Article
     * @param  LocationRequest $request [Validation]
     * @return [$location]
     */
    private function createLocation(LocationRequest $request)
    {
        $location = Location::create($request->all());
        $this->syncTags($location, $request->input('tag_list'));
        return $location;
    }
}
