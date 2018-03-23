<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * following description
     */
    public function followings()
    {
        return $this->hasMany(Following::class);
    }

    /**
     * comment description
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * request description
     */
    public function requests()
    {
        return $this->hasMany(Request::class);
    }

    /**
     * like description
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * list_request description
     */
    public function listRequests()
    {
        return $this->hasMany(List_Request::class);
    }

    /**
     * activity description
     */
    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    /**
     * review description
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
