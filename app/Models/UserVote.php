<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_sug',
        'voter_username',
        'type'
    ];

    protected $table = 'user_votes';

    public $timestamps = false;
}
