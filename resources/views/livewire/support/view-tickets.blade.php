<div class="p-6 bg-gray-100 rounded-lg shadow-md w-full">
    <h2 class="text-2xl font-bold">Ticket No: {{ $ticket->ticket_number }}</h2>
    <p class="text-sm text-gray-600"><strong>Created At:</strong> {{ $ticket->created_at->format('d-m-Y g:i A') }}</p>
    <p class="text-sm"><strong>Status:</strong> <span class="{{ $ticket->status === 'closed' ? 'text-red-500' : 'text-green-500' }}">{{ $ticket->status }}</span></p>
    <p class="text-sm"><strong>Description:</strong> {{ $ticket->description }}</p>
    <p class="text-sm"><strong>Name:</strong> {{ $ticket->user->name }}</p>
    <p class="text-sm"><strong>Email:</strong> {{ $ticket->user->email }}</p>
    
    @if ($ticket->attachment)
        <div class="mt-4">
            <strong>Attachment:</strong>
            <img src="/Problem_image/{{ $ticket->attachment }}" alt="Attachment" class="mt-2 max-w-full h-auto rounded">
        </div>
    @else
        <p class="mt-4 text-gray-500">No Attachment file is provided</p>
    @endif
    
    <hr class="my-4 border-gray-300">
    
    <h3 class="text-lg font-semibold">Messages</h3>
    <div class="messages-box bg-white p-4 rounded shadow">
        @foreach ($messages as $message)
            <div class="p-3 my-2 rounded {{ $message->user->id === auth()->id() ? 'bg-blue-100' : 'bg-gray-200' }}">
                <p><strong>{{ $message->user->name }}:</strong> {{ $message->message }}</p>
                <small class="text-gray-500">{{ $message->created_at->diffForHumans() }}</small>
            </div>
        @endforeach
    </div>
    
    <hr class="my-4 border-gray-300">
    
    @if ($ticket->status !== 'closed')
        <h3 class="text-lg font-semibold">Reply</h3>
        <form wire:submit.prevent="sendMessage" class="mt-3">
            <textarea wire:model="newMessage" rows="3" placeholder="Type your message..." class="form-control w-full p-2 border rounded"></textarea>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Send</button>
        </form>
    @endif
</div>
