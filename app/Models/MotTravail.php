<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MotTravail extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $primaryKey = 'id_sug';

    protected $fillable =[
        'mot1_sug',
        'mot2_sug',
        'mot3_sug',
        'mot4_sug',
        'mot5_sug',
        'mot6_sug',
        'enMacusi_sug',
        'dateAjout_sug',
        'explication_sug',
        'trads_sug',
    ];

    protected $table = 'mot_travails';

    public $timestamps = false;

    public function syllabe(): BelongsTo
    {
        return $this->belongsTo(Syllabe::class);
    }

    public function syllabe1() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot1_sug');
    }
    public function syllabe2() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot2_sug');
    }
    public function syllabe3() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot3_sug');
    }
    public function syllabe4() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot4_sug');
    }
    public function syllabe5() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot5_sug');
    }
    public function syllabe6() : HasOne {
        return $this->hasOne(Syllabe::class, 'syllabe', 'mot6_sug');
    }

    public function types() : HasManyThrough{
        return $this->hasManyThrough(Type::class, TypeSuggestion::class , 'id_sug' ,'id', 'id_sug', 'id_sug');
    }

    public function TypesString() : String{
        if(empty($this->types)) return '';

        $locale = strtoupper(app()->getLocale());
        if(sizeof($this->types) == 1){
            return json_decode($this->types[0]->trads)->$locale;
        }

        $str = '';
        foreach ($this->types as $type){
            $str .= json_decode($type->trads)->$locale . ' / ';
        }

        return substr($str, 0, strlen($str)-2);
    }

    public function formattedDate(){
        $date = $this->dateAjout_sug;
        $formatted = Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');

        return $formatted;
    }
}
