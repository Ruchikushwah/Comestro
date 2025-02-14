<div class="p-6 w-full">
    <div class="flex justify-between mb-4">
        <input type="text" wire:model="search" placeholder="Search Quotes..." class="border p-2 rounded">
       
    </div>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th><input type="checkbox" wire:model="selectedQuotes"></th>
                <th wire:click="sortBy('subject')" class="cursor-pointer">Subject</th>
                <th wire:click="sortBy('quote_stage')" class="cursor-pointer">Stage</th>
                <th wire:click="sortBy('deal_name')" class="cursor-pointer">Deal Name</th>
               
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($quotes as $quote)
            <tr>
                <td><input type="checkbox" wire:model="selectedQuotes" value="{{ $quote->id }}"></td>
                <td>{{ $quote->subject }}</td>
                <td>{{ $quote->quote_stage }}</td>
                <td>{{ $quote->deal_name }}</td>
                
                <td>
                    <a href="{{ route('create-quote.edit', $quote->id) }}" class="text-blue-500">Edit</a> |
                    <button wire:click="deleteSelected" class="text-red-500">Delete</button>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
    <button wire:click="deleteSelected" class="bg-red-500 text-white px-4 py-2 rounded  mt-4">Delete Selected</button>

    <div class="mt-4">
        {{ $quotes->links() }}
    </div>

    @if (session()->has('message'))
    <p class="mt-2 text-green-500">{{ session('message') }}</p>
    @endif
</div>