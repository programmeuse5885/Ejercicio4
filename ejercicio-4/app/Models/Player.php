<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //
    protected $fillable = [
        'name',
        'team_id',
        'position',
        'age',  
        'nationality',
        'description',
    ];  

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
