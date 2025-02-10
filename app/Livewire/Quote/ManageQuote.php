<?php

namespace App\Livewire\Quote;

use App\Models\Quote;
use Livewire\Component;
use Livewire\WithPagination;

class ManageQuote extends Component
{
    use WithPagination;
    public $quoteItems = [];


    public $search = '';
    public $sortField = 'created_at'; // Default sort field
    public $sortDirection = 'desc'; // Default sort direction
    public $selectedQuotes = [];

    protected $queryString = ['search', 'sortField', 'sortDirection'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }
    }

    public function deleteSelected()
    {
        if (!empty($this->selectedQuotes)) {
            Quote::whereIn('id', $this->selectedQuotes)->delete();
            session()->flash('message', 'Selected quotes deleted successfully!');
            $this->selectedQuotes = [];
        }
    }
    public function addItem()
    {
        $this->quoteItems[] = ['name' => '', 'quantity' => 1, 'price' => 0];
    }

    public function removeItem($index)
    {
        unset($this->quoteItems[$index]);
        $this->quoteItems = array_values($this->quoteItems); // Reindex array
    }


    public function render()
    {
        $quotes = Quote::where('subject', 'like', '%' . $this->search . '%')
            ->orWhere('quote_stage', 'like', '%' . $this->search . '%')
            ->orWhere('deal_name', 'like', '%' . $this->search . '%')
            ->orWhere('billing_city', 'like', '%' . $this->search . '%')
            ->orWhere('shipping_city', 'like', '%' . $this->search . '%')
            ->orderBy($this->sortField, $this->sortDirection)
            ->paginate(10);

        return view('livewire.quote.manage-quote', compact('quotes'));
    }
}
