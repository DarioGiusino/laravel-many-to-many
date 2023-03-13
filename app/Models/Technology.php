<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = ['label', 'color'];

    // link to pivot table
    public function projects()
    {
        $this->belongsToMany(Project::class);
    }
}
