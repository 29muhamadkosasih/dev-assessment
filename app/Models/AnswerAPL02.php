<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerAPL02 extends Model
{
    use HasFactory;
    protected $table = 'answer_apl02';
    protected $guarded = [];

    public function apl02()
    {
        return $this->belongsTo(apl02::class, 'apl02_id');
    }
}