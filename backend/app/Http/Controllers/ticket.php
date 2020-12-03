<?php

namespace App\Http\Controllers;

use stdClass;
use App\Models\ticket as modelTicket;

class ticket
{
    public $ticket = null;
    public $tickets = [];
    public function __construct($data = [])
    {
        $this->ticket = $data;
    }

    public function getByAirline($select = ['tickets.name_tic', 'tickets.id', 'airlines.name_air'])
    {
        $this->tickets = modelTicket::select($select)
            ->join('airlines', 'airlines.id', 'tickets.id_air')
            ->get();
    }

    public function getDetailByIdTicket($select = ['tickets.*', 'airlines.email_air', 'airlines.name_air'])
    {
        $this->ticket = modelTicket::select($select)
            ->join('airlines', 'airlines.id', 'tickets.id_air')
            ->where('tickets.id', $this->ticket['id_ticket'])
            ->first();
    }
}