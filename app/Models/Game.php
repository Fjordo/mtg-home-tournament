<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'first_blood',
        'commander_kill',
        'multi_kill',
        'rescue',
        'aesthetics',
        'best_play',
        'comments'
    ];
}
