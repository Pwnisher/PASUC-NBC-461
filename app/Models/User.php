<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\Eqar;

class User extends Model
{
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    protected $fillable = [
        'user_id',
        'last_name',
        'first_name',
        'middle_name',
    ];

    public function eqar()
    {
        return $this->hasMany(Eqar::class, 'user_user_id', 'user_id');
    }

    public function transferUserIdToEqar()
    {
        $eqars = Eqar::all();

        foreach ($eqars as $eqar) {
            $eqar->update(['user_user_id' => $eqar->user_id]);
        }
    }
}
