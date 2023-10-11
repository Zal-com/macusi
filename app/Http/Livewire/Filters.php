<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use App\Models\Syllabe;
use Database\Seeders\MotSeeder;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Filters extends Component
{

    public $filter = ['order' => '', 'beginsWith' => '', 'nbreSyllabes' => '', 'search' => ''];
    public $order = '';
    public $search = '';
    public $language = 'LoMa';
    public $beginsWith;
    public $nbreSyllabes;


    public function render()
    {
        return view('livewire.filters',[

        ]);
    }

    public function mount(){
        $this->filter['order'] = 'asc';
    }


    public function order_desc(){
        $this->filter['order'] = 'desc';
        $this->emit('updateResults', 'order_desc');
    }

    public function order_asc(){
        $this->filter['order'] = 'asc';
        $this->emit('updateResults', 'order_asc');
    }

    public function search(){
        $this->filter['search'] = $this->search;
        $this->emit('search', $this->search);
    }

    public function switch(){
        $this->emit('language', $this->language == 'LoMa' ? 'MaLo' : 'LoMa');
        $this->language = $this->language == 'LoMa' ? 'Malo' : 'LoMa';
    }

    public function beginsWith(){
        $this->filter['beginsWith'] = $this->beginsWith;
        $this->emit('updateResults', 'beginsWith_'.$this->beginsWith);
    }

    public function nbreSyllabes(){
        $this->filter['nbreSyllabes'] = $this->nbreSyllabes;
        $this->emit('updateResults', 'nbreSyllabes_' . $this->nbreSyllabes);
    }

    public function resetFilters(){
        $this->filter = ['order' => '', 'beginsWith' => '', 'nbreSyllabes' => '', 'search' => ''];
        $this->order = '';
        $this->search = '';
        $this->language = 'LoMa';
        $this->emit('updateResults', 'reset');
    }

}
