<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kompetensi02 extends Model
{
    use HasFactory;
    protected $table = 'kompetensi02';
    protected $guarded = [];

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'nama_skema_id');
    }

    public function kompetensi()
    {
        return $this->hasMany(Personaldetail::class);
    }
}