<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievements extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'achievements';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'institution',
        'date',
    ];
}
