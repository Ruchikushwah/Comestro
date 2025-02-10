<?php

namespace App\Livewire\Quote;

use App\Models\Quote;
use App\Models\User;
use App\Models\Contact;
use App\Models\Account;
use Livewire\Component;

class CreateQuote extends Component
{
    public $quoteItems = [];

    public $quote_id;
    public $quote_owner_id, $subject, $quote_stage = 'Draft', $team, $carrier;
    public $deal_name, $valid_until, $contact_id, $account_id;
    public $billing_street, $billing_city, $billing_state, $billing_code, $billing_country;
    public $shipping_street, $shipping_city, $shipping_state, $shipping_code, $shipping_country;
    public $sub_total = 0, $discount = 0, $tax = 0, $total = 0;

    public $users, $contacts, $accounts;

    protected $rules = [
        'quote_owner_id' => 'required|exists:users,id',
        'subject' => 'required|string|max:255',
        'quote_stage' => 'string|max:255',
        'team' => 'nullable|string|max:255',
        'carrier' => 'nullable|string|max:255',
        'deal_name' => 'nullable|string|max:255',
        'valid_until' => 'nullable|date',
        'contact_id' => 'nullable|exists:contacts,id',
        'account_id' => 'nullable|exists:accounts,id',
        'billing_street' => 'nullable|string|max:255',
        'billing_city' => 'nullable|string|max:255',
        'billing_state' => 'nullable|string|max:255',
        'billing_code' => 'nullable|string|max:10',
        'billing_country' => 'nullable|string|max:255',
        'shipping_street' => 'nullable|string|max:255',
        'shipping_city' => 'nullable|string|max:255',
        'shipping_state' => 'nullable|string|max:255',
        'shipping_code' => 'nullable|string|max:10',
        'shipping_country' => 'nullable|string|max:255',
        'sub_total' => 'numeric|min:0',
        'discount' => 'numeric|min:0',
        'tax' => 'numeric|min:0',
        'total' => 'numeric|min:0',
    ];

    public function mount($id = null)
    {
        $this->users = User::all();
        $this->contacts = Contact::all();

        if ($id) {
            $quote = Quote::find($id);
            if ($quote) {
                $this->quote_id = $quote->id;
                foreach ($quote->getAttributes() as $key => $value) {
                    if (property_exists($this, $key)) {
                        $this->$key = $value;
                    }
                }
                $this->quoteItems = $quote->quote_items ?? []; // Load quote items if stored as JSON
            } else {
                session()->flash('error', 'Quote not found.');
                return redirect()->route('crm.quote.create');
            }
        } else {
            // If creating a new quote, initialize with one empty item
            $this->quoteItems = [['name' => '', 'quantity' => 1, 'price' => 0]];
        }
    }


    public function save()
    {
        $validatedData = $this->validate();

        $quote = Quote::updateOrCreate(
            ['id' => $this->quote_id],
            $validatedData
        );

        $message = $this->quote_id ? 'Quote updated successfully!' : 'Quote created successfully!';
        session()->flash('message', $message);

        return redirect()->route('crm.quote');
    }

    public function delete()
    {
        if ($this->quote_id) {
            $quote = Quote::find($this->quote_id);
            if ($quote) {
                $quote->delete();
                session()->flash('message', 'Quote deleted successfully!');
            } else {
                session()->flash('error', 'Quote not found.');
            }
        }

        return redirect()->route('crm.quote');
    }

    public function render()
    {
        return view('livewire.quote.create-quote');
    }
}
