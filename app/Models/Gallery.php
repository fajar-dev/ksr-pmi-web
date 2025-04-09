<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'galleries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'image',
        'title',
        'description',
    ];

}
