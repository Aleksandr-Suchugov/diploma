<?php

namespace App\Http\Controllers;

use App\Http\Requests\SessionRequest;
use App\Models\Session;
use DateTime;
use Illuminate\Http\Response;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Session[]
     */
    public function index()
    {
        return Session::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SessionRequest $request
     * @return Response
     */
    public function store(SessionRequest $request)
    {
        return Session::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param string
     * @return Response
     */
    public function show($datetime)
    {
        $dateFormatted = DateTime::createFromFormat('Y-m-d', $datetime)->format('Y-m-d');
        return Session::whereDate('datetime', $dateFormatted)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SessionRequest $request
     * @param Session $film
     * @return bool
     */
    public function update(SessionRequest $request, Session $session)
    {
        $session->fill($request->validated());
        return $session->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Session $session
     * @return Response
     */
    public function destroy(Session $session)
    {
        if ($session->delete()) {
            return response(null, Response::HTTP_NO_CONTENT);
        }
        return null;
    }
}