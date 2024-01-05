<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailables\Content;

class Tbl_book extends Model
{
    use HasFactory;

    public function content_owner(){
        return $this->belongsTo(ContentOwner::class);
    }

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }
}
