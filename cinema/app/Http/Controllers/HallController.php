<?php

namespace App\Http\Controllers;

use App\Http\Resources\HallResource;
use App\Models\Hall;
use App\Http\Requests\HallStoreRequest;
use App\Http\Requests\HallUpdateRequest;

class HallsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HallResource::collection(
            Hall::orderBy('id', 'desc')->paginate(5)
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallStoreRequest $request)
    {
        $data = $request->validated();

        $hall = Hall::create($data);

        return new HallResource($hall);
    }

    /**
     * Display the specified resource.
     */
    public function show($hall_id)
    {
        $data = Hall::where('id', $hall_id)->get()->toArray();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HallUpdateRequest $request, Hall $hall)
    {
        $data = $request->validated();

        $hall->update($data);

        return new HallResource($hall);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
        $hall->delete();
        return response('', 204);
    }
}
