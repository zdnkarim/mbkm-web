<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbound extends Model
{
    use HasFactory;

    protected $table = 'inbounds';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'id','user_id','nim','no_hp','univ','fak','prodi',
        'jenjang_pend','nim_asal','prodi_tuj','mk_ambil'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
