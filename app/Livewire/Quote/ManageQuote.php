<?php

namespace App\Livewire\Quote;
use App\Models\Quote;
use Livewire\WithPagination;

use Livewire\Component;

class ManageQuote extends Component
{
    use WithPagination;
    public $quotes;
    public $search = '';
    public $sortField = 'id'; // Default sort field
    public $sortDirection = 'asc'; // Default sort direction

    protected $queryString = ['search', 'sortField', 'sortDirection'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function render()
    {
        $quotes = Quote::Query()
            ->where('subject', 'like', '%' . $this->search . '%')
            ->orWhere('deal_name', 'like', '%' . $this->search . '%') // Replace with actual email column
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);
        return view('livewire.quote.manage-quote', ['quotes' => $quotes]);
    }
}
