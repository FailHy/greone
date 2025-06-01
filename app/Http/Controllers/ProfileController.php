<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\Alamat;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
    $user = $request->user();
    $alamats = Alamat::where('user_id', $user->id)->get();

    return view('profile.edit', [
        'user' => $user,
        'alamats' => $alamats
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        
        $data = $request->validated();
        
        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete old file if exists
            if ($user->foto) {
                Storage::delete('public/'.$user->foto);
            }
            
            $path = $request->file('foto')->store('profile-photos', 'public');
            $data['foto'] = $path;
        }

        $user->fill($data);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Delete profile photo if exists
        if ($user->foto) {
            Storage::delete('public/'.$user->foto);
        }

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('status', 'profile deleted');
    }
}