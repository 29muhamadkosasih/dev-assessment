<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkBanding extends Model
{
    use HasFactory;
    protected $table = 'fk_04_banding';
    protected $guarded = [];

    public function banding()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
}