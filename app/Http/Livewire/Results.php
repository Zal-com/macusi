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

//FIXME Pagniation ne marche pas avec une recherche retournant plus de 24 elements
//FIXME Ordre des termes pas exactement bon

class Results extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $mots;
    public $filter = 'order_asc';
    public $count = 1;
    public $search = '';
    public $language = 'LoMa'; //LoMa -> Locale to MaCuSi | MaLo -> Macusi to Locale
    public $listeners = [
        'updateResults'=> 'updateResults',
        'search' => 'updateSearch',
        'language' => 'updateLanguage'
    ];

    public function render()
    {

        switch ($this->filter){
            case 'order_desc' : $this->mots = $this->getDicoDescOrder()->paginate(24);
                break;
            case 'order_asc' : $this->mots = $this->getDicoAscOrder()->paginate(24);
                break;
            case 'search' :$this->mots = $this->search($this->search) == null ? Mot::where('id', '>=', 65)->paginate(24) : $this->search($this->search);
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

    public function getDicoAscOrder(){
        if($this->language == 'LoMa'){
            $words = Mot::query(DB::raw('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots WHERE ORDER BY trad ASC'));
            $words->orderBy(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'), 'asc')->get();
        }
        else {
            $words = Mot::query(DB::raw('SELECT * FROM mots'));
            $words->orderBy('enMacusi', 'asc')->get();
        }

        return $words;
    }

    public function getDicoDescOrder(){

        if($this->language == 'LoMa'){
            $words = Mot::query(DB::raw('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad ASC'));
            $words->orderByDesc(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'))->get();
        }
        else {
            $words = Mot::query(DB::raw('SELECT * FROM mots ORDER BY enMacusi ASC'));
            $words->orderByDesc('enMacusi')->get();
        }

        return $words;

    }

    public function updateSearch($search){
        $this->search = $search;
        $this->filter = 'search';

    }

    public function search($searchTerm){

        if($searchTerm == ''){
            $this->search = '';
            return null;
        }
        $query = DB::select('SELECT * FROM `mots` WHERE enMacusi LIKE "' . ucfirst($searchTerm) . '%"');

        $query2 = DB::select('SELECT * FROM `mots` WHERE JSON_VALUE(trads, "$.'. strtoupper(app()->getLocale()) .'") LIKE "' . ucfirst($searchTerm) . '%"');

        $results = array_merge($query, $query2);

        return new LengthAwarePaginator(Mot::hydrate($results), count($results), 24);
    }

    public function updateLanguage($language){
        $this->language = $language;
    }

}
