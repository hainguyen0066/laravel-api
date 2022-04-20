<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\StorealbumRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatealbumRequest;
use App\Models\album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return album::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorealbumRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorealbumRequest $request)
    {
        $album = album::create($request->all());

        return $album;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(album $album)
    {
        return $album;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatealbumRequest  $request
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatealbumRequest $request, album $album)
    {
        $album->update($request->all());

        return $album;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(album $album)
    {
        $album->delete();

        return response('', 204);
    }
}
