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
        $vote = $this->item->votes->where('voter_id', '=', \Auth::user()->id)->first();

        if($vote->vote_type != 1){
            $vote->vote_type = 1;
            $vote->save();
        }

    }

    public function addNegative(){
        $vote = $this->item->votes->where('voter_id', '=', \Auth::user()->id)->first();

        if($vote->vote_type != 0){
            $vote->vote_type = 0;
            $vote->save();

        }
    }
}
