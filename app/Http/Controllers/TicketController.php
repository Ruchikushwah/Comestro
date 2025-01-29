<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function view($id){
        $tickets = Tickets::where('id',$id)->first();
            // dd($tickets->id);
        return view('support.ticket_view',compact("tickets"));
    }
}
