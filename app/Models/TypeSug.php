<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSug extends Model
{
    use HasFactory;

    protected $table = 'type_sug';

    protected $fillable = [
        'id_type',
        'id_sug'
    ];

    public $timestamps = false;
}
