<div class="w-full p-6">
    <div class="w-full mx-auto p-6 bg-slate-100 shadow-lg rounded-lg">
        @if (session()->has('message'))
        <div class="mb-4 text-slate-600 font-semibold">
            {{ session('message') }}
        </div>
        @endif

        <form wire:submit.prevent="save" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="mb-4">
                <label for="lead_owner" class="block text-sm font-medium text-gray-700">Lead Owner</label>
                <input type="text" id="lead_owner"
                    class="mt-1 block w-full rounded-md border-gray-300 text-gray-800 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    value="{{ auth()->user()->name }}" disabled>
            </div>

            <div>
                <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" id="first_name" wire:model="first_name"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    placeholder="Enter first name">
                @error('first_name')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" id="last_name" wire:model="last_name"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    placeholder="Enter last name">
                @error('last_name')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" wire:model="title"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    placeholder="Enter title">
                @error('title')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="lead_status" class="block text-sm font-medium text-gray-700">Lead Status</label>
                <select id="lead_status" wire:model="lead_status"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white">
                    <option value="">Select Status</option>
                    @foreach ($this->getLeadStatuses() as $status)
                    <option value="{{ $status }}">{{ $status }}</option>
                    @endforeach
                </select>
                @error('lead_status')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            @foreach ([
            'company' => 'Company',
            'phone' => 'Phone',
            'email' => 'Email',
            'website' => 'Website',
            'lead_source' => 'Lead Source',
            'industry' => 'Industry',
            'annual_revenue' => 'Annual Revenue',
            'no_of_employees' => 'Number of Employees',
            'rating' => 'Rating',
            'street' => 'Street',
            'city' => 'City',
            'state' => 'State',
            'zip_code' => 'Zip Code',
            'country' => 'Country',
            ] as $field => $label)
            <div>
                <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                <input type="text" id="{{ $field }}" wire:model="{{ $field }}"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    placeholder="Enter {{ strtolower($label) }}">
                @error($field)
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>
            @endforeach

            <div class="col-span-full">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" wire:model="description"
                    class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                    placeholder="Enter description"></textarea>
                @error('description')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-span-full">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    {{ $lead_id ? 'Update Lead' : 'Create Lead' }}
                </button>
            </div>
        </form>
    </div>
</div>