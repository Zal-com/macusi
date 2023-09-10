<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\App;
use Ramsey\Uuid\Type\Integer;

class Mot extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable =[
        'mot1',
        'mot2',
        'mot3',
        'mot4',
        'mot5',
        'mot6',
        'enMacusi',
        'dateAjout',
        'explication',
        'trads',
    ];

    protected $table = 'mots';

    public $timestamps = false;

    public function types() : HasManyThrough{
        return $this->hasManyThrough(Type::class, TypeMot::class, 'id_mot', 'id', 'id', 'id_type');
    }

    public function syllabe1() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot1');
    }
    public function syllabe2() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot2');
    }
    public function syllabe3() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot3');
    }
    public function syllabe4() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot4');
    }
    public function syllabe5() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot5');
    }
    public function syllabe6() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot6');
    }

    public function nbreSyllabes(){
        return strlen($this->enMacusi)/2;
    }

    public function SyllabesString() : String{
        $locale = strtoupper(app()->getLocale());
        $str = '';

        for($i = 1; $i <= $this->nbreSyllabes(); $i++){
            $var = 'syllabe' . $i;
            if($this->$var->trads) $str.= json_decode($this->$var->trads)->$locale . ' ';
        }

        return substr($str, 0,strlen($str)-1);
    }


    public function typesString() : String{
        if(empty($this->types)) return '';

        $locale = strtoupper(App::getLocale());

        if(sizeof($this->types) == 1){
            return json_decode($this->types[0]->trads)->$locale;
        }

        $str = '';
        foreach ($this->types as $type){
            $str .= json_decode($type->trads)->$locale . ' / ';
        }

        return substr($str, 0, strlen($str)-2);
    }

    public function phonetiqueString() : String {

        $str = '[';
        for($i = 1; $i <=6; $i++){
            $syllabe = Syllabe::where('syllabe', $this->{'mot' . $i})->first();
            if($syllabe == null) break;
           $str .= $syllabe->phonetique;
        }

        $str .= ']';


        return $str;
    }

}
