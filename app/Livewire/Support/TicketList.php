<?php

namespace App\Livewire\Support;

use App\Models\Tickets;
use Carbon\Carbon;
use Livewire\Component;

class TicketList extends Component
{
    public function render()
    {
        $tickets = Tickets::all()->map(function($tickets){
            $tickets->formatted_created_at = Carbon::parse($tickets->created_at)->format('d-m-Y g:i A');
            return $tickets;
        });
        return view('livewire.support.ticket-list',["tickets" => $tickets]);
    }
}
