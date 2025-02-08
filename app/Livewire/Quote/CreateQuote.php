<?php

namespace App\Livewire\Quote;

use App\Models\Quote;
use Livewire\Component;

class CreateQuote extends Component
{
    public $quote_id;
    public $subject, $quote_stage, $team, $carrier, $deal_name, $valid_until, $contact_name, $account_name;
    public $billing_street, $billing_city, $billing_state, $billing_code, $billing_country;
    public $shipping_street, $shipping_city, $shipping_state, $shipping_code, $shipping_country;

    protected $rules = [
        'subject' => 'required|string|max:255',
        'quote_stage' => 'nullable|string|max:255',
        'team' => 'nullable|string|max:255',
        'carrier' => 'nullable|string|max:255',
        'deal_name' => 'nullable|string|max:255',
        'valid_until' => 'nullable|date',
        'contact_name' => 'nullable|string|max:255',
        'account_name' => 'nullable|string|max:255',
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
    ];

    public function mount($id = null)
    {
        if ($id) {
            $quote = Quote::find($id);
            if ($quote) {
                $this->quote_id = $quote->id;
                foreach ($quote->getAttributes() as $key => $value) {
                    if (property_exists($this, $key)) {
                        $this->$key = $value;
                    }
                }
            } else {
                session()->flash('error', 'Quote not found.');
                return redirect()->route('crm.quote.create');
            }
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
