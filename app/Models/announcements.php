<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announcements extends Model
{
    use HasFactory;
    protected $fillable= [
        "title",
        "descreption",
        "skills",
        "company_id"
    ];
    
    static function announcementCounts(){
        return announcements::count();
    }
    
    public function company(){
        return $this->belongsTo(Company::class);
    } 
    public function skills(){
      return $this->belongsToMany(Skill::class ,'announcement_skill');
    }
    public function applies(){
        return $this->hasMany(Apply::class);
      }
}
