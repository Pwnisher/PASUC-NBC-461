<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eqar extends Model
{
    protected $primaryKey = ['eqar_id', 'user_user_id'];
    public $incrementing = false;

    protected $fillable = [
        //'user_user_id',
        'is_applied',
        'file_path',
        'title',
        'inclusive_date',
        'accomplishment_name',
        'department_section',
        'qar_type',
        'date_submitted',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_user_id', 'user_id');
    }

    public function pasuc()
    {
        return $this->hasMany(Pasuc::class, 'eqar_eqar_id', 'eqar_id');
    }
}
