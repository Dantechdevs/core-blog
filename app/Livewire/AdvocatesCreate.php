<?php

namespace App\Livewire;

use App\Models\Advocate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdvocatesCreate extends Component
{

    #[Rule('required')]
    public $name = '';
    #[Rule('required')]
    public $email = '';
    #[Rule('required')]
    public $phone = '';
    #[Rule('required')]
    public $address = '';
    #[Rule('required')]
    public $website = '';
    #[Rule('required')]
    public $bio = '';
    #[Rule('required')]
    public $location = '';


    public function render()
    {

        return view('livewire.advocates-create');
    }

    public function save()
    {
        $this->validate();
        Advocate::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'bio' => $this->bio,
            'location' => $this->location,
            'address' => $this->address,
            'website' => $this->website,
            'facebook' => $this->website,
            'twitter' => $this->website,
            'linkin' => $this->website,
        ]);
        flash('Success Advocate created ')->success();
        return back();

    }





}
