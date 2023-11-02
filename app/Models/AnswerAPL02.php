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

    public function feedback()
    {
        return $this->hasMany(fkFeedback::class);
    }

    public function laporanPertama()
    {
        return $this->hasMany(fkLaporan::class);
    }

    public function laporan2()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan3()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan4()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan5()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan6()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan7()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan8()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan9()
    {
        return $this->hasMany(fkLaporan::class);
    }
    public function laporan10()
    {
        return $this->hasMany(fkLaporan::class);
    }
}