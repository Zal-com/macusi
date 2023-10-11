<?php

namespace App\Http\Livewire;

use App\Models\Mot;
use App\Models\Syllabe;
use Database\Seeders\MotSeeder;
use Illuminate\Database\Eloquent\Builder;
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

    private $mots;
    public $filter = ['order' => '', 'beginsWith' => '', 'NbreSyllabes' => null, 'search' => ''];
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
        $mots = Mot::query();

        if ($this->filter['NbreSyllabes'] != null){
            $mots->whereRaw('LENGTH(enMacusi) = ' . $this->filter['NbreSyllabes']*2);
        }

        if($this->filter['beginsWith'] != ''){
            $mots->where('mot1', '=', $this->filter['beginsWith']);
        }

        if($this->filter['search'] != ''){

            //$mots->where('enMacusi', 'like', ucfirst($this->filter['search']));
            $mots->whereRaw('JSON_VALUE(trads, "$.'. strtoupper(app()->getLocale()) .'") LIKE "' . ucfirst($this->filter['search']) . '%"');

        }

        if($this->filter['order'] == 'asc'){
            if($this->language == 'MaLo') {
                $mots->orderBy('enMacusi', 'asc');
            }
            else{
                $mots->orderBy(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'), 'asc');
            }

        }
        else{
            if($this->language == 'MaLo'){

                $mots->orderBy('enMacusi', 'desc');
            }
            else{
                $mots->orderBy(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'), 'desc');
            }

        }


        return view('livewire.results', [
            'mots' => $mots->paginate(24)
        ]);
    }

    public function mount(){
        $this->mots = Mot::query();
        $this->filter['order'] = 'asc';

    }

    public function updateResults($filter){
        switch($filter){
            case 'order_asc' : $this->filter['order'] = 'asc';
                break;
            case 'order_desc' : $this->filter['order'] = 'desc';
                break;
            case 1 == preg_match('/^beginsWith_/', $filter) : $this->filter['beginsWith'] = explode('_', $filter)[1];
                break;
            case 1 == preg_match('/^nbreSyllabes_/', $filter) : $this->filter['NbreSyllabes'] = explode('_', $filter)[1];
                break;
            case 'reset' : $this->resetFilters();
                break;
        }

    }

    public function getDicoAscOrder(){ //Builder
        if($this->language == 'LoMa'){
            //$words = Mot::query(DB::raw('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots WHERE ORDER BY trad ASC'));
            $this->mots->orderBy(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'), 'asc');
        }
        else {
            //$words = Mot::query(DB::raw('SELECT * FROM mots ORDER BY enMacusi ASC'));
            dd($this->mots);
            $this->mots->orderBy('enMacusi', 'asc');
        }

        //$words->union($this->mots);
    }

    public function getDicoDescOrder(){

        if($this->language == 'LoMa'){
            $words = Mot::query(DB::raw('SELECT *, JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'") as trad FROM mots ORDER BY trad ASC'));
            $words->orderByDesc(DB::raw(' JSON_EXTRACT(trads, "$.'.strtoupper(app()->getLocale()).'")'));
        }
        else {
            $words = Mot::query(DB::raw('SELECT * FROM mots ORDER BY enMacusi ASC'));
            $words->orderByDesc('enMacusi');
        }

        $words->union($words);

    }

    public function updateSearch($search){
        $this->search = $search;
        $this->filter['search'] = $search;

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

    public function beginsWith($syllabe) //Builder
    {
        try {
            $this->mots->unionAll((Mot::where('mot1', '=', $syllabe)));
        } catch (\Exception $e) {
            return redirect()->route('dico.index', app()->getLocale())->with('error', __('validation.exists', ['attribute' => '']));
        }
    }

    public function nbreSyllabes($nbre){
        try{
            Mot::whereRaw('LENGTH(enMacusi) = ' . $nbre*2)->union($this->mots);
        }catch(\Exception $e){
            return redirect()->route('dico.index', app()->getLocale())->with('error', __('validation.exists', ['attribute' => '']));
        }
    }

    public function resetFilters(){
        $this->filter = ['order' => 'asc', 'beginsWith' => '', 'NbreSyllabes' => null, 'search' => ''];
        $this->language = 'LoMa';
    }
}
