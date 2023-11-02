<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fkLaporan extends Model
{
    use HasFactory;
    protected $table = 'fk_05_laporan';
    protected $guarded = [];

    public function laporanPertama()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id');
    }
    public function laporan2()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_2');
    }
    public function laporan3()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_3');
    }
    public function laporan4()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_4');
    }
    public function laporan5()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_5');
    }
    public function laporan6()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_6');
    }
    public function laporan7()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_7');
    }
    public function laporan8()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_8');
    }
    public function laporan9()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_9');
    }
    public function laporan10()
    {
        return $this->belongsTo(AnswerAPL02::class, 'answer_apl02_id_10');
    }

    public function kompetensiLaporan()
    {
        return $this->belongsTo(Kompetensi::class, 'kompetensi_id');
    }

    public function asesor()
    {
        return $this->belongsTo(Asesor::class, 'asesor_id');
    }
}