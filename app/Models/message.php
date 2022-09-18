<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;

    protected $fillable = ['messages_description','services_id','users_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id')->first();
    }

    public function files()
    {
        return $this->hasMany(file::class,'message_id');
    }
}
