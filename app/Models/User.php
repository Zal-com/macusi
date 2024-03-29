<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use CrudTrait;
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'first_name',
        'last_name',
        'password',
        'photo',
        'code_nationalite'
    ];

    protected $guarded = [
        'status',
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',

    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    /*
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    */

    public $timestamps = true;

    public function nationalite() : BelongsTo
    {
        return $this->belongsTo(Nationalite::class, 'code_nationalite', 'code', 'nationalite');
    }

    public function isAdmin() : bool {
        return Auth::user()->hasRole('admin');
    }

    public function isActivated() : bool {
        return !($this->status == 0);
    }

    public function dateVerbose(String $date) : String {
        return date('d/m/Y', strtotime($this->$date));
    }

    public function votes(){
        return $this->hasMany(UserVote::class, 'voter_id', 'id');
    }

    public function hasVotedPositively($submission_id){
        return !empty($this->votes()->where('id_sug', '=',$submission_id)
            ->where('vote_type', '=', 1)
            ->first());
    }

    public function hasVotedNegatively($submission_id){
        return !empty($this->votes()->where([
                ['id_sug', '=',$submission_id],
                ['vote_type', '=', 0]
            ]
        )->first());
    }
}
