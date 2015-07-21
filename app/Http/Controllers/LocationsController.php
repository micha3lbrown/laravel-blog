<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Location;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\LocationRequest;
use App\Http\Controllers\Controller; //@todo commented out to test if this is being used

class LocationsController extends Controller
{
    
    public function __construct()
    {
        // $this->middleware('owner', ['only' => [ 'edit', 'update']]);
        $this->middleware('auth', ['except' => ['index', 'view']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $locations = Location::all()->sortBy('name');

        return view('locations.index', compact('locations'));
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
        $this->createLocation($request);
        
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
        $currentTags = array_filter($tags, 'is_numeric');       // ["1", "3", "5"]
        $newTags = array_diff($tags, $currentTags);

        foreach ($newTags as $newTag)
        {
            if ($tag = Tag::create(['name' => $newTag])) {
                $currentTags[] = $tag->id;
            }
        }

        $location->tags()->sync($currentTags);
    }

    /**
     * Save a new Article
     * @param  LocationRequest $request [Validation]
     * @return [$location]                  
     */
    private function createLocation(LocationRequest $request)
    {
        $location = Auth::user()->locations()->create($request->all());
        $this->syncTags($location, $request->input('tag_list'));
        
        return $location;
    }
}
