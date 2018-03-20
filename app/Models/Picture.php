<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'book_id',
        'url'
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
