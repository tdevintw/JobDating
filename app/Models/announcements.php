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

    
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
