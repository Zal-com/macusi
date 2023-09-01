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
    public $search = '';
    public $listeners = [
        'updateResults'=> 'updateResults',
        'search' => 'updateSearch'
    ];

    public function render()
    {
        switch ($this->filter){
            case 'order_desc' : $this->mots = $this->getDicoDescOrder()->paginate(24);
                break;
            case 'search' :$this->mots = $this->search($this->search)->paginate(24);
                break;
            default : $this->mots = Mot::where('id', '>=', 65)->paginate(24);
                break;
        }

        return view('livewire.results', [
            'mots' => $this->mots
        ]);
    }

    public function mount(){
        $this->filter = '';
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

    public function updateSearch($search){
        $this->search = $search;
        $this->filter = 'search';

    }

    public function search($searchTerm){
        $query = DB::select(dd('SELECT *, JSON_UNQUOTE(JSON_EXTRACT(trads, "$.' . strtoupper(app()->getLocale()) . '")) as "trad" FROM `mots` WHERE enMacusi LIKE "' . $searchTerm . '%" OR "trad" LIKE "' . $searchTerm . '%"'));

        dd($query);
        dd($data->paginate(2));

        return $data;
    }

}
