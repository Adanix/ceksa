<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model

    {
    protected $table = "gambar";
 
    protected $fillable = ['file','keterangan'];
    
      public function posts()
    {
        return $this->hasMany(Post::class);
    }
};

