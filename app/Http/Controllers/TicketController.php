<?php

namespace App\Http\Controllers;

use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // public function viewSpecifiedTicketPage($id){
    //     $tickets = Tickets::where('id',$id)->first();
    //     return view('support.ticket_view',compact("tickets"));
    // }

    public function manageTickets(){
        return view('support.manage_tickets');
    }

    public function viewTicket($id){
        return view('support.ticket_view',compact('id'));
    }
    


}
