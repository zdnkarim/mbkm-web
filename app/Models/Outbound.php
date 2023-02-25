<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbound extends Model
{
    use HasFactory;

    protected $table = 'outbounds';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'user_id','nim','no_hp','univ','fak','prodi','semester'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function programs(){
        return $this->belongsTo(ProgramMbkm::class, 'program_id');
    }
}
