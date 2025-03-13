<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organizer extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'organizers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'name',
        'member_id',
        'position',
    ];
}
