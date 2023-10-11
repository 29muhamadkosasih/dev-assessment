<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkRahasia extends Model
{
    use HasFactory;
    protected $table = 'fk_01_kerahasiaan';
    protected $guarded = [];

    public function rahasia()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
}
