<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'sports_id',
        'team_members',
        'captan',
        'coach'
    ];

    public function sport()
    {
        return $this->belongsTo(Sport::class, 'sports_id', 'id');
    }

}
