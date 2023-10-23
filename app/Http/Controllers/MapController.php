<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($centre_id)
    {
        return Map::where('centre_id', $centre_id)->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMapRequest $request)
    {
        $map = new Map();
        $map->centre_id = $request->centre_id;
        $map->latitude = $request->latitude;
        $map->longitude = $request->longitude;
        $map->status = $request->status;
        $map->save();

        $response = [
            'success' => true,

            'message' => "centre register successfully"
        ];

        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Map $map)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMapRequest $request, Map $map)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Map $map)
    {
        //
    }
}
