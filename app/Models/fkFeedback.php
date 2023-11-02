<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkFeedback extends Model
{
    use HasFactory;
    protected $table = 'fk_03_feedback';
    protected $guarded = [];

    public function feedback()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
}