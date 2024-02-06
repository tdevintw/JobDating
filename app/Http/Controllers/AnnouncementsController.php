<?php

namespace App\Http\Controllers;

use App\Http\Requests\announcementsRequest;
use App\Models\announcements;
use App\Http\Requests\StoreannouncementsRequest;
use App\Http\Requests\UpdateannouncementsRequest;
use App\Models\Company;

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
        ->with('i',(request()->input('page',1)-1)*5);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies =  Company::all();
        return view('admin.announcements.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(announcementsRequest $request)
    {
        
        announcements::create($request->validated());

        return redirect()->route('announcements.index')->with('success','announcements added succefuly');
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
        return view('admin.announcements.edit',compact('announcement','companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(announcementsRequest $request, announcements $announcement)
    {

        $announcement->update($request->validated());
        return redirect()->route('announcements.index')->with('succes','announcements edited succefuly');
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
