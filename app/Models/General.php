<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class General extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'generals';
    protected $primaryKey = 'id';

    protected $fillable = [
        'logo',
        'favicon',
        'email',
        'phone',
        'address',
        'facebook',
        'instagram',
        'linkedin',
        'youtube',
        'tiktok',
        'about',
        'vision',
        'mission',
        'history',
        
    ];
}
