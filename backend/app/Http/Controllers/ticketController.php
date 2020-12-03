<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function index()
    {
        $alert = '';
        $tickets = [];
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
        $tickets = [];
        return response(
            [
                'response' => true,
                'alert' => $alert,
                'tickets' => $tickets
            ]
        );
    }
}