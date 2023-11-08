<?php

namespace App\Livewire;

use App\Models\Advocate;
use Livewire\Attributes\Rule;
use Livewire\Component;

class AdvocatesUpdate extends Component
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
    public Advocate $advocate;
    public function mount($advocate)
    {
        $this->name = $advocate->name;
        $this->email = $advocate->email;
        $this->phone = $advocate->phone;
        $this->address = $advocate->address;
        $this->location = $advocate->location;
        $this->website = $advocate->website;
        $this->bio = $advocate->bio;
        // dd($advocate);
        // $advocate = Advocate::findOrFail($id);
    }




    public function render()
    {

        return view('livewire.advocates-update', [
            //'advocate' => $advocate,
        ]);
    }

    public function update()
    {
        $this->validate();
         $this->advocate->update([
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
        flash('Success Advocate Updated ')->success();
        return back();
    }


}
