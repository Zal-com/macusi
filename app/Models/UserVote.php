<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVote extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'id_sug',
        'voter_username',
        'vote_type'
    ];

    protected $table = 'user_votes';

    public $timestamps = false;

    public function submission(){
        return $this->belongsTo(MotTravail::class);
    }

    public function voter(){
        return $this->belongsTo(User::class, 'id', 'voter_id');
    }
}
