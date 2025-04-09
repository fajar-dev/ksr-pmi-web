<?php

namespace App\Models;

use App\Models\Organizer;
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

    public function position()
    {
        return $this->hasMany(Organizer::class);
    }
}
