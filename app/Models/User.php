<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline()
    {
        return Tweet::where('user_id', $this->id)
            ->orWhereHas('user.followers', function ($query) {
                $query->where('follower_user_id', $this->id);
            })
            ->latest()
            ->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function avatar($width = 40, $height = 40)
    {
        return "https://avatars.dicebear.com/api/avataaars/".$this->email.".svg?width=".$width."&height=".$height."&mode=exclude&mouth[]=vomit";
    }

    public function follow(User $user)
    {
        return $this->following()->save($user);
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'follower_user_id', 'following_user_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'follower_user_id')->withTimestamps();
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function profileLink()
    {
        return route('profiles.show', $this);
    }
}
