<?php
namespace App\Livewire\Lead;

use App\Models\Lead;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ManageLead extends Component
{
    use WithPagination;

    public $search = '';
    public $sortField = 'created_at';
    public $sortDirection = 'desc';
    public $selectedLeads = [];
    public $leadCountToday;

    protected $updatesQueryString = ['search'];
    protected $listeners = ['leadCreated' => 'updateLeadCount'];

    public function mount()
    {
        $this->updateLeadCount();
    }

    // Update lead count dynamically
    public function updateLeadCount()
    {
        $this->leadCountToday = Lead::whereDate('created_at', Carbon::today())
            ->where('lead_owner', Auth::user()->name)
            ->count();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function deleteSelected()
    {
        if (!empty($this->selectedLeads)) {
            Lead::whereIn('id', $this->selectedLeads)->delete();
            session()->flash('message', 'Selected leads deleted successfully!');
            $this->selectedLeads = [];
            $this->updateLeadCount(); // Update count after delete
        }
    }

    public function render()
    {
        $leads = Lead::where('lead_owner', Auth::user()->name)
            ->where(function ($query) {
                $query->where('first_name', 'like', '%' . $this->search . '%')
                    ->orWhere('last_name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%');
            })
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.lead.manage-lead', compact('leads'));
    }
}
