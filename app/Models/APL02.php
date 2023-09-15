<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APL02 extends Model
{
    use HasFactory;
    protected $table = 'apl02';
    protected $guarded = [];

    public function personal_detail()
    {
        return $this->belongsTo(Personaldetail::class, 'apl01_id');
    }

    public function kompetensi02()
    {
        return $this->belongsTo(Kompetensi02::class, 'kompetensi02_id');
    }

    public function answer()
    {
        return $this->hasMany(AnswerAPL02::class);
    }
}