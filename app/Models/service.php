<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = ['services_name','services_description','users_id'];

    public function messages()
    {
        return $this->hasMany(message::class,'services_id')->reorder('updated_at', 'desc');
    }
}
