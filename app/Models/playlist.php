<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    use HasFactory;
    protected $table = 'playlist';
    protected $fillable = ['playlistname','imageplaylist','user_id','music_id'];

   

}
