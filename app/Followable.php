<?php
namespace App;

use App\Models\User;

trait Followable
{
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

    public function isFollowing(User $user)
    {
        return $this->following()->where('following_user_id', $user->id)->exists();
    }

    public function unfollow(User $user)
    {
        return $this->following()->detach($user);
    }
}
