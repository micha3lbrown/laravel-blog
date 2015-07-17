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
        $location = Location::create($request->all());

        $tags = $request->input('tags');

        $location->tags()->attach($tags);

        return redirect()->action('LocationsController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $location = Location::findOrFail($id);
        $tags = $location->tags()->lists('name');
        return view('locations.show', compact('location', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $location = Location::findOrFail($id);
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
    public function update(LocationRequest $request, $id)
    {
        $location = Location::findOrFail($id);
        
        $location->update($request->all());

        $tags = $request->input('tags');

        $location->tags()->attach($tags);

        return redirect()->action('LocationsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return redirect()->action('LocationsController@index');
    }
}
