<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'name',
        'author',
        'number_page',
        'description',
        'category_id',
        'status'
    ];

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function listRequests()
    {
        return $this->hasMany(List_Request::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
