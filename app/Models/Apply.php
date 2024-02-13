<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apply extends Model
{
    use HasFactory;
    protected $table =  'applies';
    protected $fillable = [
        "status"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function announcement(){
        return $this->belongsTo(announcements::class, 'announcements_id');
    }
}