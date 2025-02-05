<?php

namespace App\Http\Controllers;
class TicketController extends Controller
{
    public function manageTickets(){
        return view('support.manage_tickets');
    }

    public function viewTicket($id){
        return view('support.ticket_view',compact('id'));
    }
    
}
