<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeSuggestion extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id_type',
        'id_sug'
    ];

    protected $table = 'type_sugs';

    public $timestamps = false;

}
