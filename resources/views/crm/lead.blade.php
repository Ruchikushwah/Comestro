<x-layouts.app title="lead">

<div class="flex flex-col justify-between items-center mb-4 mt-5 w-full px-10 py-5">
    <div class="flex justify-between  items-center w-full">
        <h2 class="text-2xl font-semibold">Manage Leads</h2>
        <a href="{{ route('create-lead') }}" class="bg-slate-600   text-white px-4 py-2 rounded">Create Lead</a>

    </div>
    @livewire('lead.manage-lead')
</div>
</x-layouts.app>