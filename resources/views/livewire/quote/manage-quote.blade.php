  <!-- <div>
    <div class="w-full">
         Search Bar 
        <div class="flex justify-between mb-4">
            <input type="text" placeholder="Search..." class="border px-4 py-2 rounded"
                wire:model.debounce.500ms="search" />
        </div> 

        Table 
     <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">Subject</th>
                        <th scope="col" class="px-6 py-3">Quote Stage</th>
                        <th scope="col" class="px-6 py-3">Team</th>
                        <th scope="col" class="px-6 py-3">Contact Name</th>
                        <th scope="col" class="px-6 py-3">Account Name</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($quotes ?? [] as $quote)
                    <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $quote->subject }}
                        </th>
                        <td class="px-6 py-4">{{ $quote->quote_stage }}</td>
                        <td class="px-6 py-4">{{ $quote->team }}</td>
                        <td class="px-6 py-4">{{ $quote->carrier }}</td>
                        <td class="px-6 py-4">{{ $quote->deal_name }}</td>
                        <td class="px-6 py-4">{{ $quote->valid_until }}</td>
                        <td class="px-6 py-4">{{ $quote->contact_name }}</td>
                        <td class="px-6 py-4">{{ $quote->account_name }}</td>
                        
                        <td class="px-6 py-4 gap-4">
                            <a href="{{ route('create-quote.edit', $quote->id) }}" wire:navigate
                                class="font-medium text-slate-600">Edit</a>
                            <a href="{{ route('create-quote.delete', $quote->id) }}" wire:navigate
                                class="font-medium text-red-600">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="11" class="border px-4 py-2 text-center">No Quotes Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div> 
     <div class="mt-4">
        {{ $quotes->links() }}
</div> 
</div>   -->