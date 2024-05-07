<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Http\Resources\SessionResource;
use App\Http\Requests\SessionStoreRequest;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $session = Session::all();

        return $session;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SessionStoreRequest $request)
    {
        $data = $request->validated();

        $session = Session::create($data);

        return new SessionResource($session);
    }

    /**
     * Показать все сессии относящиеся к конкретному halls_id
     */
    public function show($hall_id)
    {
        $data = Session::where('hall_id', $hall_id)->get()->toArray();
        return $data;
    }

    /**
     * Показать все сессии относящиеся к конкретному movies_id
     */
    public function showSessionByMovie($movie_id)
    {
        $data = Session::where('movie_id', $movie_id)->get()->toArray();
        return $data;
    }


    /**
     * Показать конкретную сессию
     */
    public function showSession($session_id)
    {
        $data = Session::where('id', $session_id)->get()->toArray();
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
    public function destroy(Session $session)
    {
        $session->delete();
        return response('', 204);
    }
}
