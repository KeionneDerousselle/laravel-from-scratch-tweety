<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user);

        $attributes = request()->validate([
            'username' => [
                'required',
                'alpha_dash',
                'max:255',
                Rule::unique('users', 'username')->ignore($user->id)
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore($user->id)
            ],
            'name' => 'required|string|max:255',
            'avatar'=> 'nullable|image',
            'password' => 'nullable|string|min:8|max:255|confirmed',
        ]);

        if (!$attributes['password']) {
            $attributes['password'] = $user->password;
        }

        if (!$attributes['avatar']) {
            $attributes['avatar'] = $user->avatar;
        } else {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect(route('profiles.show', compact('user')));
    }
}
