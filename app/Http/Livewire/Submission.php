<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Submission extends Component
{
    public $item;
    public $negative_count;
    public $positive_count;

    public function render()
    {

        $this->negative_count = count($this->item->votes_negatifs);
        $this->positive_count = count($this->item->votes_positifs);

        return view('livewire.submission');
    }

    public function addPositive(){
        //Si un vote positif existe deja -> ne rien faire
        //Si un vote négatif existe deja -> Supprimer vote négatif + ajouter vote positif
    }
}
