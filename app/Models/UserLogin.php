<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $fillable = ['login_time', 'user_agent', 'ip_address', 'session_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
