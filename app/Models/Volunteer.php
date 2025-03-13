<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Volunteer extends Model
{
    use HasFactory;

    const BLOOD_APOSITIVE = 'A+';

    const BLOOD_ANEGATIVE = 'A-';

    const BLOOD_BPOSITIVE = 'B+';

    const BLOOD_BNEGATIVE = 'B-';

    const BLOOD_ABPOSITIVE = 'AB+';

    const BLOOD_ABNEGATIVE = 'AB-';

    const BLOOD_OPOSITIVE = 'O+';

    const BLOOD_ONEGATIVE = 'O-';

    const ROLES = [
        self::BLOOD_APOSITIVE => 'A+',
        self::BLOOD_ANEGATIVE => 'A-',
        self::BLOOD_BPOSITIVE => 'B+',
        self::BLOOD_BNEGATIVE => 'B-',
        self::BLOOD_ABPOSITIVE => 'AB+',
        self::BLOOD_ABNEGATIVE => 'AB-',
        self::BLOOD_OPOSITIVE => 'O+',
        self::BLOOD_ONEGATIVE => 'O-',
    ];

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
