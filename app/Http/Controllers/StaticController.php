<?php

namespace App\Http\Controllers;

use App\Models\announcements;
use App\Models\Company;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
      $skills = Skill::skillCounts();
      $companies = Company::companyCounts();
      $users = User::userCounts();
      $announcements = announcements::announcementCounts();

      $counts = ['skills'=>$skills,'users'=>$users,'companies'=>$companies,'announcements'=>$announcements];

      return view('admin.statics.index',compact(['counts']));  
    }


}
