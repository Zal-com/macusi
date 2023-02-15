<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSuggestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_type',
        'id_sug'
    ];

    protected $table = 'type_sugs';

    public $timestamps = false;
}
