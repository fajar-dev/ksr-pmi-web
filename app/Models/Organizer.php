<?php

namespace App\Models;

use App\Models\Period;
use App\Models\Position;
use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organizer extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'organizers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'volunteer_id',
        'period_id',
        'position_id',
    ];

    public function volunteers()
    {
        return $this->belongsTo(Volunteer::class, 'volunteer_id');
    }
    public function positions()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    public function periods()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
}
