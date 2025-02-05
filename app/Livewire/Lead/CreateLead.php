<?php

namespace App\Livewire\Lead;

use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateLead extends Component
{
    public $lead_id;
    public $lead_owner, $first_name, $last_name, $title, $company, $phone, $email, $website, $lead_source;
    public $lead_status, $industry, $annual_revenue, $no_of_employees, $rating, $street, $city, $state, $zip_code, $country, $description;

    protected $rules = [
        'first_name' => 'required|string',
        'last_name' => 'required|string',
        'title' => 'nullable|string',
        'company' => 'nullable|string',
        'phone' => 'nullable|string',
        'email' => 'required|email',
        'website' => 'nullable|url',
        'lead_source' => 'nullable|string',
        'lead_status' => 'required|in:in New,Contacted,Qualified,Lost,Closed',
        'industry' => 'nullable|string',
        'annual_revenue' => 'nullable|numeric',
        'no_of_employees' => 'nullable|integer',
        'rating' => 'nullable|string',
        'street' => 'nullable|string',
        'city' => 'nullable|string',
        'state' => 'nullable|string',
        'zip_code' => 'nullable|string',
        'country' => 'nullable|string',
        'description' => 'nullable|string',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $lead = Lead::find($id);
            if ($lead) {
                $this->lead_id = $lead->id;
                $this->lead_owner = Auth::user()->name;
                $this->first_name = $lead->first_name;
                $this->last_name = $lead->last_name;
                $this->title = $lead->title;
                $this->company = $lead->company;
                $this->phone = $lead->phone;
                $this->email = $lead->email;
                $this->website = $lead->website;
                $this->lead_source = $lead->lead_source;
                $this->lead_status = $lead->lead_status;
                $this->industry = $lead->industry;
                $this->annual_revenue = $lead->annual_revenue;
                $this->no_of_employees = $lead->no_of_employees;
                $this->rating = $lead->rating;
                $this->street = $lead->street;
                $this->city = $lead->city;
                $this->state = $lead->state;
                $this->zip_code = $lead->zip_code;
                $this->country = $lead->country;
                $this->description = $lead->description;
            } else {
                session()->flash('error', 'Lead not found.');
                return redirect()->route('create-lead');
            }
        }
    }

    public function save()
    {
        $validatedData = $this->validate();
        $validatedData['lead_owner'] = Auth::user()->name;

        if ($this->lead_id) {
            Lead::find($this->lead_id)->update($validatedData);
            session()->flash('message', 'Lead updated successfully!');
        } else {
            Lead::create($validatedData);
            session()->flash('message', 'Lead created successfully!');
        }

        return redirect()->route('crm.lead');
    }

    public function delete()
    {
        if ($this->lead_id) {
            $lead = Lead::find($this->lead_id);
            if ($lead) {
                $lead->delete();
                session()->flash('message', 'Lead deleted successfully!');
            } else {
                session()->flash('error', 'Lead not found.');
            }
        }
        return redirect()->route('crm.lead');
    }
    public function getLeadStatuses()
    {
        return ['New', 'Contacted', 'Qualified', 'Lost', 'Closed'];
    }


    public function render()
    {
        return view('livewire.lead.create-lead');
    }
}
