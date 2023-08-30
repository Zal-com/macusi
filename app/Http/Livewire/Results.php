<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use Database\Seeders\MotSeeder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Results extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $mots;
    public $filter = '';
    public $count = 1;
    public $listeners = ['updateResults'=> 'updateResults'];

    public function render()
    {
        switch ($this->filter){
            case 'order_desc' : $this->mots = $this->getDicoDescOrder()->paginate(24);
                break;
            /*
            $dico = Mot::hydrate(
                    DB::select(
                        'SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad DESC'
                    )
            );*/
                break;
            default : $this->mots = Mot::where('id', '>=', 65)->paginate(24);
                break;
        }

        return view('livewire.results', [
            'mots' => $this->mots
        ]);
    }

    public function updateResults($filter){
        $this->filter = $filter;
    }

    public function getDicoDescOrder(){
        /* Iluminate\Support\Collection
        $data = DB::table('mots')
            ->select('*', DB::raw('JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as `trad`'))
            ->orderByDesc('trad')
            ->get();
        */

        //Illuminate\Database\Eloquent\Collection


        $words = Mot::query(DB::raw('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad ASC'));

        $words->orderByDesc(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'))->get();

        return $words;

    }

}
