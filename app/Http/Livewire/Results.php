<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use App\Models\Syllabe;
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
    public $filter = '';
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
        if(preg_match('/^beginsWith_[A-Z][a-z]$/', $this->filter)){
            $this->mots = $this->beginsWith(explode('_', $this->filter)[1])->paginate(24);
        }
        else if(preg_match('/nbreSyllabes_[1-6]$/', $this->filter)) {
            $this->mots = $this->nbreSyllabes(explode('_', $this->filter)[1])->paginate(24);
        }
        else{

            switch ($this->filter) {
                case 'order_desc' :
                    $this->mots = $this->getDicoDescOrder()->paginate(24);
                    break;
                case 'search' :
                    $this->mots = $this->search($this->search) == null ? Mot::where('id', '>=', 65)->paginate(24) : $this->search($this->search)->paginate(24);
                    break;
                case 'order_asc':
                default :
                    $this->mots = $this->getDicoAscOrder()->paginate(24);
                    break;
            }
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
            $words = Mot::query(DB::raw('SELECT * FROM mots ORDER BY enMacusi ASC'));
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

        $resultsMacusi = Mot::where('enMacusi', 'like', ucfirst($searchTerm));
        $resultsLocale = Mot::whereRaw('JSON_VALUE(trads, "$.'. strtoupper(app()->getLocale()) .'") LIKE "' . ucfirst($searchTerm) . '%"');

        return $resultsLocale->unionAll($resultsMacusi);
    }

    public function updateLanguage($language){
        $this->language = $language;
    }

    public function beginsWith($syllabe)
    {
        try {
            return Mot::where('mot1', '=', $syllabe);
        } catch (\Exception $e) {
            return redirect()->route('dico.index', app()->getLocale())->with('error', __('validation.exists', ['attribute' => '']));
        }
    }

    public function nbreSyllabes($nbre){
        try{
            return Mot::whereRaw('LENGTH(enMacusi) = ' . $nbre*2);
        }catch(\Exception $e){
            return redirect()->route('dico.index', app()->getLocale())->with('error', __('validation.exists', ['attribute' => '']));
        }
    }
}
