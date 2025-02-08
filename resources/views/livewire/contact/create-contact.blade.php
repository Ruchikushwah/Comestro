<div class="w-full p-6">
    <div class="w-full mx-auto p-6 bg-slate-100 shadow-lg rounded-lg">
        @if (session()->has('message'))
        <div class="mb-4 text-slate-600 font-semibold">
            {{ session('message') }}
        </div>
        @endif

        <form wire:submit.prevent="save" class="space-y-6">
            <!-- Contact Owner -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Contact Owner</h2>
                <div class="col-span-2 lg:col-span-4">
                    <input type="text" id="contact_owner"
                        class="mt-1 block w-52 rounded-md border-gray-300 text-gray-800 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-gray-100"
                        value="{{ auth()->user()->name }}" disabled>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Contact Information</h2>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ([
                    'first_name' => 'First Name', 'last_name' => 'Last Name', 'email' => 'Email', 'mobile' => 'Mobile',
                    'account_name' => 'Account Name', 'assistant' => 'Assistant', 'lead_source' => 'Lead Source',
                    'title' => 'Title', 'department' => 'Department', 'date_of_birth' => 'Date of Birth',
                    'asst_phone' => 'Assistant Phone', 'secondary_email' => 'Secondary Email',
                    'reporting_to' => 'Reporting To'
                    ] as $field => $label)
                    <div class="col-span-2 lg:col-span-1">
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                        <input type="{{ $field == 'date_of_birth' ? 'date' : 'text' }}" id="{{ $field }}"
                            wire:model="{{ $field }}"
                            class="mt-1 block w-full rounded-md border-gray-300 bg-white shadow-sm py-2 px-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Enter {{ strtolower($label) }}">
                        @error($field) <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Address Information Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Address Information</h2>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Mailing Address -->
                    <div class="col-span-2 lg:col-span-4">
                        <h3 class="text-md font-semibold text-gray-700">Mailing Address</h3>
                    </div>
                    @foreach ([
                    'mailing_street' => 'Street', 'mailing_city' => 'City', 'mailing_state' => 'State',
                    'mailing_pincode' => 'Pincode', 'mailing_country' => 'Country'
                    ] as $field => $label)
                    <div class="col-span-2 lg:col-span-1">
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                        <input type="text" id="{{ $field }}" wire:model="{{ $field }}"
                            class="mt-1 block w-full rounded-md border-gray-300 bg-white shadow-sm py-2 px-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Enter {{ strtolower($label) }}">
                    </div>
                    @endforeach

                    <!-- Other Address -->
                    <div class="col-span-2 lg:col-span-4 mt-4">
                        <h3 class="text-md font-semibold text-gray-700">Other Address</h3>
                    </div>
                    @foreach ([
                    'other_street' => 'Street', 'other_city' => 'City', 'other_state' => 'State',
                    'other_pincode' => 'Pincode', 'other_country' => 'Country'
                    ] as $field => $label)
                    <div class="col-span-2 lg:col-span-1">
                        <label for="{{ $field }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
                        <input type="text" id="{{ $field }}" wire:model="{{ $field }}"
                            class="mt-1 block w-full rounded-md border-gray-300 bg-white shadow-sm py-2 px-4 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                            placeholder="Enter {{ strtolower($label) }}">
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Description Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Description</h2>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Additional Notes</label>
                    <textarea id="description" wire:model="description"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                        placeholder="Enter description"></textarea>
                    @error('description') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="px-6 py-2 text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    {{ $contact_id ? 'Update Contact' : 'Create Contact' }}
                </button>
            </div>
        </form>
    </div>
</div>