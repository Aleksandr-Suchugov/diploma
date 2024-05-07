<?php

namespace App\Http\Controllers;

use App\Http\Requests\PriceStoreRequest;
use App\Http\Requests\PriceUpdateRequest;
use App\Models\Price;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(PriceStoreRequest $request)
    {
        $data = $request->all();

        // Получаем массив с ценами и разбираем его
        if (is_array($data)) {
            foreach ($data as $item) {
                $seat = Price::create($item);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $hall_id)
    {
        $data = Price::where('hall_id', $hall_id)->get()->toArray();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PriceUpdateRequest $request, $hall_id)
    {
        $data = $request->validated();

        Price::where('hall_id', $hall_id)->where('type_id', $data['type_id'])->update($data);
        return response('Change successful', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
