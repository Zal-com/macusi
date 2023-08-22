<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $form = '';
    public function render()
    {
        return view('livewire.login');
    }

}
