<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'user_id',
        'book_id'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
}
