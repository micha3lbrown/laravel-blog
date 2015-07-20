<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Location;
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $tags = \App\Tag::lists('name', 'id');
        return view('locations.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(LocationRequest $request)
    {
        $this->createLocation($request);
        return redirect()->action('LocationsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Location $location)
    {
        $tags = \App\Tag::lists('name', 'id');
        return view('locations.edit', compact('location', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Location $location, LocationRequest $request)
    {
        dd($request);
        $location->update($request->all());
        $this->syncTags($location, $request->input('tag_list'));
        return redirect()->action('LocationsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
