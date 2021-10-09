<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Profil berhasil diubah'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withStatusPassword(__('Password berhasil diubah'));
    }

    public function share()
    {
        $users = User::where('name', '<>', 'Admin')->get();
        return view('profile.index',['users' => $users]);
    }

    public function getById($id)
    {
        $user = User::find($id);
        return view('profile.maintenance',['user' => $user]);
    }

    public function userUpdate(Request $request)
    {
        User::where('id', $request->id)
        ->update(['name' => $request->name, 'email' => $request->email]);

        $user = User::find($request->id);
        return view('profile.maintenance', ['user' => $user])->withStatus(__('Profil berhasil diubah'));;
    }

}
