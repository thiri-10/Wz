<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentOwner extends Model
{
    use HasFactory;

    public function book(){
        return $this->hasMany(Tbl_book::class);
    }
}
