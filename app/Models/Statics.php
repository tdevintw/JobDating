<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statics extends Model
{
    use HasFactory;

    static function getCount(){
        $announcements = announcements::count();
        $skills = Skill::count();
        $companies = Company::count();
        $users = User::count();
        return compact('announcements' , 'skills' , 'companies' , 'users');
    }
}
