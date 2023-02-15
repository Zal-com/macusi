<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationalite extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';
    protected $fillable = [
        'id',
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
