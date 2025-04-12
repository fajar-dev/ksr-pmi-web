<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'visitors';
    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'ip',
        'browser',  
        'device',
    ];
    
}
