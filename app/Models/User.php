<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Followable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'avatar'
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
        return $this->hasMany(Tweet::class)->latest();
    }

    public function getAvatarLink($width = 40, $height = 40)
    {
        return $this->avatar ? asset('storage/'.$this->avatar) : "https://avatars.dicebear.com/api/avataaars/".$this->username.".svg?width=".$width."&height=".$height."&mode=exclude&mouth[]=vomit";
    }

    public function profileLink()
    {
        return route('profiles.show', $this);
    }
}
