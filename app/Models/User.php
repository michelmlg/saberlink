<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    public function privilege()
    {
        return $this->belongsTo(Privilege::class, 'id_privilege');
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}



// use Illuminate\Database\Eloquent\Model;

// class User extends Model
// {
//     protected $table = 'tb_users';
//     protected $fillable = ['name', 'email', 'password', 'id_privilege'];

//     public function privilege()
//     {
//         return $this->belongsTo(Privilege::class, 'id_privilege');
//     }

//     // Um usuário pode ter várias iscas (baits)
//     public function baits()
//     {
//         return $this->hasMany(Bait::class, 'id_user'); // Relacionamento 1:N
//     }
// }