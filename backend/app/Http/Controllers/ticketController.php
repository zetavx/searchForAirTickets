<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function index()
    {
        $alert = '';
        $tickets = [];

        $ticket = new ticket();
        $ticket->getByAirline();
        $tickets = $ticket->tickets;
        return response(
            [
                'response' => true,
                'alert' => $alert,
                'tickets' => $tickets
            ]
        );
    }

    public function show($ticketId)
    {
        $alert = '';
        $ticket = null;

        $ticket = new ticket(['id_ticket' => $ticketId]);
        $ticket->getDetailByIdTicket();
        $ticket = $ticket->ticket;
        return response(
            [
                'response' => true,
                'alert' => $alert,
                'ticket' => $ticket
            ]
        );
    }
}