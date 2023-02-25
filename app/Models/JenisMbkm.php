<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisMbkm extends Model
{
    use HasFactory;

    public function programMbkm()
    {
        return $this
        ->hasMany(ProgramMbkm::class)
        ->withTimeStamps();
    }
}
