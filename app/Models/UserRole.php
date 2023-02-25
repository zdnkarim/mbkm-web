<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $table = 'role_user';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'role_id','user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }
}
