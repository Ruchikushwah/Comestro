<?php

namespace App\Livewire\Support;

use App\Models\Messages;
use App\Models\Tickets;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ViewTickets extends Component
{
    public $ticketId;
    public $ticket;
    public $messages;
    public $newMessage;

    public function mount($id)
    {
        $this->ticketId = $id;
        $this->loadTicket();
        $this->loadMessages();
    }

    public function loadTicket()
    {
        $this->ticket = Tickets::findOrFail($this->ticketId);
    }

    public function loadMessages()
    {
        $this->messages = Messages::where('ticket_id', $this->ticketId)
            ->orderBy('created_at', 'asc')
            ->get();
    }

    public function sendMessage()
    {
      
        
        // Get the authenticated user

        Messages::create([
            'ticket_id' => $this->ticketId,
            'sender_id' => Auth::id(), 
            'sender_type' => 'admin',
            'message' => $this->newMessage,
        ]);

        $this->newMessage = ''; // Clear the input field
        $this->loadMessages(); // Refresh the messages list
    }

    public function render()
    {
        return view('livewire.support.view-tickets');
    }
}
