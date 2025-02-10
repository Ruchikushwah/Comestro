<div class="w-full p-6">
    <div class="w-full mx-auto p-6 bg-slate-100 shadow-lg rounded-lg">
        @if (session()->has('message'))
        <div class="mb-4 text-slate-600 font-semibold">
            {{ session('message') }}
        </div>
        @endif

        <form wire:submit.prevent="save" class="space-y-6">
            <!-- Lead Information Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Lead Information</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div>
                        <label for="lead_owner" class="block text-sm font-medium text-gray-700">Lead Owner</label>
                        <input type="text" id="lead_owner"
                            class="mt-1 block w-full rounded-md border-gray-300 text-gray-800 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-gray-100"
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
                        <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                        <input type="text" id="company" wire:model="company"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter company name">
                        @error('company')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" id="phone" wire:model="phone"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter phone number">
                        @error('phone')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" id="email" wire:model="email"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter email">
                        @error('email')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Address Information Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Address Information</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    <div>
                        <label for="street" class="block text-sm font-medium text-gray-700">Street</label>
                        <input type="text" id="street" wire:model="street"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter street">
                    </div>

                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" id="city" wire:model="city"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter city">
                    </div>

                    <div>
                        <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                        <input type="text" id="state" wire:model="state"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter state">
                    </div>

                    <div>
                        <label for="zip_code" class="block text-sm font-medium text-gray-700">Zip Code</label>
                        <input type="text" id="zip_code" wire:model="zip_code"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter zip code">
                    </div>

                    <div>
                        <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                        <input type="text" id="country" wire:model="country"
                            class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                            placeholder="Enter country">
                    </div>
                </div>
            </div>

            <!-- Description Section -->
            <div class="bg-white p-4 rounded-lg shadow">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Description Information</h2>
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea id="description" wire:model="description"
                        class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm border px-4 py-2 bg-white"
                        placeholder="Enter description"></textarea>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="col-span-full">
                <button type="submit"
                    class="w-full sm:w-auto px-6 py-2 text-white rounded-md bg-slate-500 hover:bg-slate-600">
                    {{ $lead_id ? 'Update Lead' : 'Create Lead' }}
                </button>
            </div>
        </form>
    </div>
</div>