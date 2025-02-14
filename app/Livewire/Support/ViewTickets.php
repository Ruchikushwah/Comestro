<?php

namespace App\Livewire\Support;

use App\Models\Messages;
use App\Models\Tickets;
use Livewire\Component;

class ViewTickets extends Component
{
    public $ticketId;
    public $ticket;
    public $messages;
    public $newMessage;

    public function mount($id){
        $this->ticketId = $id;
        $this->loadTicket();
        // $this->loadMessages();
    }

    public function loadTicket(){
        $this->ticket = Tickets::findOrFail($this->ticketId);
        $this->messages = Messages::where('ticket_id', $this->ticketId)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.support.view-tickets');
    }
}
