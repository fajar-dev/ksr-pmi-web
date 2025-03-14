<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'volunteers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'name',
        'member_id',
        'faculty',
        'major',
        'blood_type',
    ];
}
