<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $skills = Skill::all();
      
      return view('admin/skills/index',compact('skills')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SkillRequest $request)
    {
        Skill::create($request->validated());
        return redirect()->route('skills.index')->with('success','skill added');
    }

    public function edit(Skill $skill)
    {
        return view('admin.skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return redirect()->route('skills.index')->with('succes','updated suucefuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
     $skill->delete();
     return redirect()->route('skills.index')->with('succes','deleted succusfuly');
    }
}
