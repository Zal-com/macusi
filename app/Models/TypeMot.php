<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class TypeMot extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_type',
        'id_mot'
    ];

    protected $table = 'type_mots';

    public $timestamps = false;
}
