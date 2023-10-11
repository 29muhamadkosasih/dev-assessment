<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkAspek extends Model
{
    use HasFactory;
    protected $table = 'fk_06_aspek';
    protected $guarded = [];

    public function aspek()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
}
