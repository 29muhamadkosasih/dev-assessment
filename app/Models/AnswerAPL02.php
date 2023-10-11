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
        return $this->belongsTo(APL02::class, 'apl02_id');
    }

    public function banding()
    {
        return $this->hasMany(fkBanding::class);
    }

    public function aspek()
    {
        return $this->hasMany(fkAspek::class);
    }

    public function rekAsm()
    {
        return $this->hasMany(fkRekAsm::class);
    }

    public function rahasia()
    {
        return $this->hasMany(fkRahasia::class);
    }
}
