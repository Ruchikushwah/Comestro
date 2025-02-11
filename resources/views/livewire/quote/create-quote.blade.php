<div class=" px-5 py-10 bg-white rounded-lg w-full">
    <h2 class="text-lg font-semibold mb-4">Quote Information</h2>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-gray-700">Quote Owner</label>
            <select wire:model="quote_owner_id" class="w-full border rounded p-2">
                <option>Select Owner</option>
                {{-- Add dynamic owner options here --}}
            </select>
        </div>

        <div>
            <label class="block text-gray-700">Deal Name</label>
            <input type="text" wire:model="deal_name" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="block text-gray-700">Subject <span class="text-red-500">*</span></label>
            <input type="text" wire:model="subject" class="w-full border rounded p-2">
            @error('subject') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-gray-700">Valid Until</label>
            <input type="date" wire:model="valid_until" class="w-full border rounded p-2">
        </div>

        <div>
            <label class="block text-gray-700">Quote Stage</label>
            <select wire:model="quote_stage" class="w-full border rounded p-2">
                <option value="Draft">Draft</option>
                <option value="Negotiation">Negotiation</option>
                <option value="Closed Won">Closed Won</option>
                <option value="Closed Lost">Closed Lost</option>
            </select>
        </div>
    </div>

    <div class="mb-4">
        @foreach($quoteItems as $index => $item)
        <div class="grid grid-cols-5 gap-4 mb-2 items-center">
            <select wire:model="quoteItems.{{$index}}.product_id" wire:change="updateProduct({{$index}})" class="w-full border rounded p-2">
                <option value="">Select Product</option>
               
                <option value="</option>
                
            </select>

            <input type="number" wire:model="quoteItems.{{$index}}.quantity" wire:change="updateTotal({{$index}})" placeholder="Quantity" class="w-full border rounded p-2">
            <input type="number" wire:model="quoteItems.{{$index}}.price" wire:change="updateTotal({{$index}})" placeholder="Price" class="w-full border rounded p-2">
            <input type="text" wire:model="quoteItems.{{$index}}.total" disabled placeholder="Total" class="w-full border rounded p-2 bg-gray-100">
            <button wire:click="removeItem({{$index}})" class="bg-red-500 text-white px-4 py-2 rounded">Remove</button>
        </div>
        @endforeach
        <button wire:click="addItem" class="bg-green-500 text-white px-4 py-2 rounded">Add Item</button>
    </div>

    <script>
        document.addEventListener('livewire:load', function() {
            Livewire.on('productUpdated', function(index, price) {
                document.querySelector(`[wire\\:model='quoteItems.${index}.price']`).value = price;
            });
        });
    </script>


    <h2 class="text-lg font-semibold mt-6 mb-4">Address Information</h2>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <h3 class="font-semibold text-gray-700">Billing Address</h3>
            <input type="text" wire:model="billing_street" placeholder="Street" class="w-full border rounded p-2 mt-1">
            <input type="text" wire:model="billing_city" placeholder="City" class="w-full border rounded p-2 mt-1">
        </div>
        <div>
            <h3 class="font-semibold text-gray-700">Shipping Address</h3>
            <input type="text" wire:model="shipping_street" placeholder="Street" class="w-full border rounded p-2 mt-1">
            <input type="text" wire:model="shipping_city" placeholder="City" class="w-full border rounded p-2 mt-1">
        </div>
    </div>

    <div class="flex justify-end mt-4">
        <button wire:click="save" class="bg-blue-500 text-white px-4 py-2 rounded">Save Quote</button>
    </div>

    @if (session()->has('message'))
    <p class="mt-2 text-green-500">{{ session('message') }}</p>
    @endif
</div>