<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use MongoDB\Laravel\Eloquent\Model as Eloquent;
// use Illuminate\Auth\Authenticatable;
// use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
// use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Database\Factories\UserFactory;
use MongoDB\Laravel\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

// 2. Extender de Eloquent de Mongo e implementar AuthenticatableContract
class User extends Eloquent implements AuthenticatableContract
{
    /** @use HasFactory<UserFactory> */
    // use Authenticatable, HasFactory, Notifiable;
use Authenticatable, Notifiable;
    // 3. Definir la conexión y colección explícita
    protected $connection = 'mongodb';
    protected $collection = 'users';

    // 4. Incluir los campos de Google en la lista de asignación masiva
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

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