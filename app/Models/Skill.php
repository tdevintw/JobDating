<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = [
        "name"
    ];

    static function skillCounts(){
        return Skill::count();
    }

    public function users(){
    return $this->belongsToMany(Skill::class , 'user_skill');
    }
    public function announcements(){
       return  $this->belongsToMany(announcements::class , 'announcement_skill');
    }
}
