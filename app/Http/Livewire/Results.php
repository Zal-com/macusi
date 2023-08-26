<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use Livewire\Component;

class Results extends Component
{
    public $mots;
    public $count = 1;

    public function render()
    {
        $this->mots = Mot::where('id', '>=', 65)->paginate(24);

        return view('livewire.results', [
            'mots' => $this->mots,
        ]);
    }

}
