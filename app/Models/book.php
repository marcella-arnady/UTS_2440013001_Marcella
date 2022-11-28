<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;

    protected $table = "books";

    public function book_category()
    {
       return $this->belongsTo(book_category::class);
    }
}
