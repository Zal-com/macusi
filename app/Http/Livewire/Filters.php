<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Filters extends Component
{
    public $filter = '';
    public $order = '';


    public function render()
    {
        return view('livewire.filters');
    }

    public function filter(){
        dd($this->filter);


        $this->emit();
    }

    public function order(){
        dd($this->order);
    }

    public function order_desc(){
        //$data = DB::select('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad DESC');

        $this->emit('updateResults', 'order_desc');
    }

    public function order_asc(){
        //$data = DB::select('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad');

        $this->emit('updateResults', 'order_asc');

    }
}
