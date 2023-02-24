<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Mot extends Model
{
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
        'isValidated',
        'submitter',
        'trads',
    ];

    protected $table = 'mots';

    public $timestamps = false;

    public function types() : HasManyThrough{
        return $this->hasManyThrough(Type::class, TypeMot::class, 'id_mot', 'id', 'id', 'id_type');
    }
}
