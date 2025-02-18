<x-layouts.app title="admin | view tickets & chats">
    <div class="flex flex-col justify-between items-center mb-4 mt-5 w-full px-10 py-5">
        <div class="flex justify-between  items-center w-full">
            <h2 class="text-2xl font-semibold">Manage Tickets</h2>
            <a href="/admin/support/tickets" class="bg-slate-700   text-white px-4 py-2 rounded">Go back</a>
    
        </div>
        @livewire('support.view-tickets',['id' => $ticket->id])
    </div>

</x-layouts.app>