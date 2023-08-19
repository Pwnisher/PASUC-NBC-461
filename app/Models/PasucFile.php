<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasucFile extends Model
{
    protected $primaryKey = 'pasuc_id';
    public $incrementing = false;

    protected $fillable = [
        'kra', 'criteria', 'eqar_files_eqar_id', 'eqar_files_user_user_id',
        'eval_status', 'is_submitted'
    ];

    public function eqarFile()
    {
        return $this->belongsTo(EqarFile::class, 'eqar_files_eqar_id', 'eqar_id')
            ->where('eqar_files_user_user_id', $this->eqar_files_user_user_id);
    }
}
