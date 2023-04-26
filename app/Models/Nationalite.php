<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'nationalite',
        'code'
    ];

    protected $table = 'nationalites';

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
