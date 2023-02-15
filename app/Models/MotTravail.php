<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MotTravail extends Model
{
    use HasFactory;

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
}
