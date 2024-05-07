<?php

namespace App\Http\Controllers;

use App\Http\Resources\SeatNumberResource;
use App\Http\Requests\SeatNumberStoreRequest;
use App\Models\SeatNumber;
use Illuminate\Http\Request;

class SeatNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SeatNumberResource::collection(
            SeatNumber::orderBy('id', 'desc')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SeatNumberStoreRequest $request)
    {
        $data = $request->all();

        // Получаем массив из мест кинозала и разбираем его
        if (is_array($data)) {
            foreach ($data as $item) {
                for ($i = 0; $i < count($item); $i++) {
                    $seatNumber = SeatNumber::create($item[$i]);
                }
            }
        }
        return response('Success', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show($hall_id)
    {
        $data = SeatNumber::where('hall_id', $hall_id)->get()->toArray();
        return $data;
    }
    public function default($hall_id)
    {
        $data = SeatNumber::where('hall_id', $hall_id)->where('type_id', 1)->get()->toArray();
        return $data;
    }
    public function vip($hall_id)
    {
        $data = SeatNumber::where('hall_id', $hall_id)->where('type_id', 2)->get()->toArray();
        return $data;
    }
    public function showByID($id)
    {
        $data = SeatNumber::where('id', $id)->get()->toArray();
        return $data;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($hall_id)
    {
        SeatNumber::where('hall_id', $hall_id)->delete();

        return response('', 204);
    }
}
