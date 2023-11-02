<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;
    protected $table = 'asesor';
    protected $guarded = [];

    public function asesor()
    {
        return $this->hasMany(fkLaporan::class);
    }
}