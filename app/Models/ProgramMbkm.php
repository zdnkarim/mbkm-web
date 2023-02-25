<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramMbkm extends Model
{
    use HasFactory;

    public function jenis(){
        return $this->belongsTo(JenisMbkm::class, 'jenis_id');
    }

    public function outbound()
    {
        return $this
        ->hasMany(Outbound::class)
        ->withTimeStamp();
    }
}
