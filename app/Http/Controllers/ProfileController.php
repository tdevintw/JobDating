<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Apply;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $skills = Skill::all();

        $applies = Apply::with(['user', 'announcement'])->where('user_id',auth()->id())->where('status','accepted')->get();

        return view('profile.edit', [
            'user' => $request->user(),
            'skills'=>$skills,
            'applies'=>$applies
        ]);
    }
    public function updateSkills(Request $request)
    {
        $user = $request->user();
        $user->skills()->sync($request->input('skills', []));
        return redirect()->back()->with('success', 'Skills updated successfully');
    }
    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    $user = $request->user();
    $user->fill($request->validated());

    // Save user's profile information
    if ($user->isDirty('email')) {
        $user->email_verified_at = null;
    }
    $user->save();

    // Sync user's skills

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

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
