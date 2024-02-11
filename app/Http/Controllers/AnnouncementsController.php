<?php

namespace App\Http\Controllers;

use App\Http\Requests\announcementsRequest;
use App\Models\announcements;
use App\Http\Requests\StoreannouncementsRequest;
use App\Http\Requests\UpdateannouncementsRequest;
use App\Models\Company;
use App\Models\Skill;

class AnnouncementsController extends Controller

{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
      $announcements = announcements::with('company')
      ->latest()
      ->paginate();
      return view('admin.announcements.index',compact('announcements'))
        ->with('i',(request()->input('page',1)-1)*5);  
      }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies =  Company::all();
        $skills  = Skill::all();
        return view('admin.announcements.create',compact('companies','skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(announcementsRequest $request)
{
    $validatedData = $request->validated();

    // Create the announcement
    $announcement = announcements::create([
        'title' => $validatedData['title'],
        'descreption' => $validatedData['descreption'],
        'company_id' => $validatedData['company_id'],
    ]);

    // Attach selected skills to the announcement
    $announcement->skills()->attach($validatedData['skills']);

    return redirect()->route('announcements.index')->with('success', 'Announcement added successfully');
}

    /**
     * Display the specified resource.
     */
    public function show(announcements $announcement)
    {
        $announcement->load('company');
        return view('admin.announcements.show',compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(announcements $announcement)
    {
        $companies = Company::all();
        $skills = Skill::all();
        return view('admin.announcements.edit',compact('announcement','companies','skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(announcementsRequest $request, announcements $announcement)
{
    // Validate the request data
    $validatedData = $request->validated();

    // Update the announcement data
    $announcement->update([
        'title' => $validatedData['title'],
        'descreption' => $validatedData['descreption'],
        'company_id' => $validatedData['company_id'],
    ]);

    // Sync the associated skills
    if (isset($validatedData['skills'])) {
        $announcement->skills()->sync($validatedData['skills']);
    }

    // Redirect back to the index page with a success message
    return redirect()->route('announcements.index')->with('success', 'Announcement edited successfully');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(announcements $announcement)
    {
        $announcement->delete();

        return redirect()->route('announcements.index')->with('succes','deleted succefuly');

    }
}
