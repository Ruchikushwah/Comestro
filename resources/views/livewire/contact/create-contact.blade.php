<div class="w-full p-6">
    <div class="w-full mx-auto p-6 bg-slate-100 shadow-lg rounded-lg">
        @if (session()->has('message'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('message') }}
        </div>
        @endif
        <form wire:submit.prevent="save" class="grid grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Contact Owner -->
            <div class="col-span-2 lg:col-span-4">
                <label for="contact_owner" class="block text-sm font-medium text-gray-700">Contact Owner</label>
                <input type="text" id="contact_owner" class="mt-1 block  self-start rounded-md border-gray-300 text-gray-800 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-gray-100" value="{{ auth()->user()->name }}" disabled>
            </div>

            <!-- Dynamic Fields -->
            @foreach ([
            'first_name' => 'First Name', 'last_name' => 'Last Name', 'email' => 'Email', 'mobile' => 'Mobile',
            'account_name' => 'Account Name', 'assistant' => 'Assistant', 'lead_source' => 'Lead Source',
            'title' => 'Title', 'department' => 'Department', 'date_of_birth' => 'Date of Birth',
            'asst_phone' => 'Assistant Phone', 'secondary_email' => 'Secondary Email',
            'reporting_to' => 'Reporting To', 'mailing_street' => 'Mailing Street',
            'mailing_city' => 'Mailing City', 'mailing_state' => 'Mailing State', 'mailing_pincode' => 'Mailing Pincode',
            'mailing_country' => 'Mailing Country', 'other_street' => 'Other Street', 'other_city' => 'Other City',
            'other_state' => 'Other State', 'other_pincode' => 'Other Pincode', 'other_country' => 'Other Country',
            'description' => 'Description'
            ] as $field => $label)
            <div class="col-span-2 lg:col-span-1">
                <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                @if($field == 'date_of_birth')
                <input type="date" id="{{ $field }}" wire:model="{{ $field }}" class="mt-1 block w-full rounded-md border-gray-300 bg-white shadow-sm py-2 px-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @else
                <input type="text" id="{{ $field }}" wire:model="{{ $field }}" class="mt-1 block w-full rounded-md border-gray-300 bg-white shadow-sm py-2 px-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                @endif
                @error($field) <span class="text-sm text-red-500">{{ $message }}</span> @enderror
            </div>
            @endforeach

            <!-- Submit Button -->
            <div class="col-span-2 lg:col-span-4 flex justify-end">
                <button type="submit" class="px-6 py-2 text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    {{ $contact_id ? 'Update Contact' : 'Create Contact' }}
                </button>
            </div>
        </form>
    </div>
</div>