<?php

namespace App\Http\Controllers;

use App\Models\announcements;
use App\Models\Statics;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
      $counts = Statics::getCount();

      return view('admin.statics.index',$counts);  
    }


}
