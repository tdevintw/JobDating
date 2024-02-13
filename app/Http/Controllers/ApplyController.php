<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{

    public function index($id = null)
    {
        if ($id) {
            $applies = Apply::with(['user', 'announcement'])->where('announcements_id', $id)->get();
        } else {
            $applies = Apply::with(['user', 'announcement'])->get();
        }
        return view('admin.applies.index', compact('applies'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'announcements_id' => 'required|exists:announcements,id', // Ensure the announcement exists
        ]);

        // Create a new apply instance
        $apply = new Apply();
        $apply->announcements_id = $request->announcements_id;
        $apply->user_id = auth()->id(); // Assuming you're using authentication


        // Save the apply
        $apply->save();

        // Redirect back or wherever you want
        return back()->with('success', 'Application submitted successfully!');
    }

    public function accept(Apply $apply){
        $apply->update(['status' => 'accepted']);
        return redirect()->back()->with('success', 'Apply accepted successfully.');
    }

    public function reject(Apply $apply){
        $apply->update(['status' => 'rejected']);
        return redirect()->back()->with('success', 'Apply rejected successfully.');
    }



}
