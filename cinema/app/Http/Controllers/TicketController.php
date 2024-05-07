<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Http\Resources\TicketResource;
use App\Http\Requests\TicketStoreRequest;

class TicketController extends Controller
{
    public function store(TicketStoreRequest $request)
    {
        $data = $request->validated();

        $tickets = Ticket::create($data);

        return new TicketResource($tickets);
    }

    /**
     * Показать все сессии относящиеся к конкретному UUID
     */
    public function showTicketsBySession($uuid)
    {
        $data = Ticket::where('uuid', $uuid)->get()->toArray();
        return $data;
    }

    /**
     * Показать все билеты относящиеся к конкретному session_id
     */
    public function showSeatsBySession($session_id, $date)
    {
        $data = Ticket::where('date', $date)->where('session_id', $session_id)->get()->toArray();
        return $data;
    }
}
