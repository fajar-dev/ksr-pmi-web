<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    public $timestamps = true;
    protected $table = 'periods';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'start',
        'end',
        'description',
        'decree',
    ];
}
