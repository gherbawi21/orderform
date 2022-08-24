<?php

namespace App\Http\Livewire;

use App\Models\Form;
use Livewire\Component;

class CountForm extends Component
{
    protected $listeners = ['FormAdded'=>'$refresh'];

    public function render()
    {
        $form_cont = Form::count();
        return view('livewire.count-form',compact('form_cont'));
    }
}
