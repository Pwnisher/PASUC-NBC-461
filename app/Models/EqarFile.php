<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EqarFile extends Model
{
    protected $primaryKey = 'eqar_id';
    public $incrementing = false;

    protected $fillable = [
        'user_user_id', 'is_approved', 'file_path', 'title',
        'inclusive_date', 'accomplishment_name', 'department_section',
        'qar_type', 'date_submitted', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_user_id', 'user_id');
    }
}
