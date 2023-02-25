<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'photo',
        'status',
        'id_nationalite'
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
        return $this->status == 2;
    }

    public function isActivated() : bool {
        return !($this->status == 0);
    }

    public function dateVerbose(String $date) : String {
        return date('d/m/Y', strtotime($this->$date));
    }
}
