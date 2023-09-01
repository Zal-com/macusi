<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use Database\Seeders\MotSeeder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Filters extends Component
{
    public $filter = 'order_asc';
    public $order = '';
    public $search = '';


    public function render()
    {
        return view('livewire.filters');
    }

    public function order(){
        dd($this->order);
    }

    public function order_desc(){
        $this->filter = 'order_desc';
        //$data = DB::select('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad DESC');

        $this->emit('updateResults', 'order_desc');
    }

    public function order_asc(){
        //$data = DB::select('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad');
        $this->filter = 'order_asc';
        $this->emit('updateResults', 'order_asc');
    }

    public function search(){

        $this->filter = 'search';
        $this->emit('search', $this->search);
    }
}
