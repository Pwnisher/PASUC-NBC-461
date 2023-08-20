<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasuc extends Model
{
    protected $primaryKey = ['pasuc_id', 'eqar_files_eqar_id', 'eqar_files_user_user_id'];
    public $incrementing = false;

    protected $fillable = [
        'kra',
        'criteria',
        'eqar_files_eqar_id',
        'eqar_files_user_user_id',
        'eval_status',
        'is_submitted',
        'cycle',
    ];

    public function eqar()
    {
        return $this->belongsTo(Eqar::class, 'eqar_files_eqar_id', 'eqar_id')->where('eqar_files_user_user_id', $this->eqar_files_user_user_id);
    }
}
