<?php

namespace App\Http\Controllers;

use App\Models\GeneateTicket;
use Illuminate\Http\Request;

class GenerateTicketApiController extends Controller
{
    public function store(Request $request){
        $ticket = new GeneateTicket();
    }
}
