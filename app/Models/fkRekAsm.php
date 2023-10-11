<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkRekAsm extends Model
{
    use HasFactory;
    protected $table = 'fk_02_rek_asm';
    protected $guarded = [];

    public function rekAsm()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
}