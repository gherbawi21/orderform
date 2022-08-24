<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function store(){
        $form = Form::create([
            "name"    => $this->name   ,
            "email"   => $this->email  ,
            "phone"   => $this->phone  ,
        ]);
        $this->emit('FormAdded');
    }
}
