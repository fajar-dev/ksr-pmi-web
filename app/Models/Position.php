<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $timestamps = true;
    protected $table = 'positions';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'sort',
    ];
}
