<div class=" w-full">
    <div class="flex justify-between mb-4">
        <input
            type="text"
            placeholder="Search..."
            class="border px-4 py-2 rounded" />
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-full">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Contact Owner
                    </th>
                    <th scope="col" class="px-6 py-3">
                        First Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Account Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mobile
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($contacts as $contact)
                <tr class="odd:bg-white even:bg-gray-50 border-b border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ auth()->user()->name }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{ $contact->first_name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $contact->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->account_name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $contact->mobile }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('create-contact.edit', $contact->id)}}" wire:navigate class="font-medium text-slate-600">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="border px-4 py-2 text-center">No Contacts Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>