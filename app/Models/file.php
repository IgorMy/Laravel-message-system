<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class file extends Model
{

    protected $fillable = ['files_file_location','message_id','users_id'];

    use HasFactory;
}
