<?php
namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\announcements;
use Illuminate\Http\Request;

class HomeController{
    public function index()
    {
     $no_data=[];
      $announcements = announcements::join('companies','announcements.company_id','=','companies.id')
      ->select('announcements.*','companies.name as company_name')
      ->latest()
      ->paginate();
      if($announcements->isEmpty()){
        $no_data = ['message'=>'There is No Announcements for the moment','emoji'=>'T-T'];
      }
      return view('home',compact('announcements','no_data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }
}