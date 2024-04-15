<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function first_team()
    {
        return $this->belongsTo(Team::class,'first_team_id');
    }
    
     public function second_team()
    {
        return $this->belongsTo(Team::class,'second_team_id');
    }
    
    
}
