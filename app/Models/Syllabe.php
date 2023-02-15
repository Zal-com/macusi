<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Syllabe extends Model
{
    use HasFactory;

    protected $fillable = [
        'syllabe',
        'trads'
    ];

    protected $table = 'syllabes';

    public $timestamps = false;

    public function motTravails(): HasMany
    {
        return $this->hasMany(MotTravail::class);
    }

}
