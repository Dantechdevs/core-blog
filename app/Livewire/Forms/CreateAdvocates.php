<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;


class CreateAdvocates extends Form
{
    //
     #[Rule('required')]
    public $name ='';
    #[Rule('required')]
    public $email ='';
    #[Rule('required')]
    public $phone ='';
    #[Rule('required')]
    public $address ='';
    #[Rule('required')]
    public $website ='';
    #[Rule('required')]
    public $bio ='';


}
