<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function syllabe(): BelongsTo
    {
        return $this->belongsTo(Syllabe::class);
    }
}
