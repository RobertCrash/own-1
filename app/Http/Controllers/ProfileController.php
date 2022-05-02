<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserEmailSettingsRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function update(UpdateProfileRequest $request)
    // {
    //     auth()->user()->update($request->only('name', 'email'));
    //
    //     if ($request->input('password')) {
    //         auth()->user()->update([
    //             'password' => bcrypt($request->input('password'))
    //         ]);
    //     }
    //
    //     return redirect()->route('profile.show')->with('message', 'Profile saved successfully');
    // }

    /**
     * Update the user Email Settings
     */
    public function UpdateEmailSettings(UpdateUserEmailSettingsRequest $request)
    {
        auth()->user()->update([
            'provider_imap_srv'  => $request->input('provider_imap_srv'),
            'provider_imap_port' => $request->input('provider_imap_port'),
            'provider_imap_ssl'  => $request->input('provider_imap_ssl'),
            'provider_smtp_srv'  => $request->input('provider_smtp_srv'),
            'provider_smtp_port' => $request->input('provider_smtp_port'),
            'provider_smtp_ssl'  => $request->input('provider_smtp_ssl'),
        ]);

        return back()->with('message', 'Settings Updated');
    }

    public function show(Request $request)
    {
        // return view('profile.show', [
        //     //'request' => $request,
        //     'user' => $request->user(),
        // ]);
        return view('profile.show');
    }

}
