<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Znck\Eloquent\Relations\BelongsToThrough;

class Type extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'trads',
        'isValidated'
    ];

    protected $table = 'types';

    public $timestamps = false;

    public function getSelectedTrad($language_code){
        return json_decode($this->trads)->$language_code;
    }

    public function getStatusString(){
        return $this->isValidated == 1 ? 'Oui' : 'Non';
    }

    public function suggestions() : BelongsToThrough{
        return $this->belongsToThrough(MotTravail::class, TypeSuggestion::class);
    }

    public function mots() : BelongsToThrough{
        return $this->belongsToThrough(Mot::class, TypeMot::class);
    }

}
