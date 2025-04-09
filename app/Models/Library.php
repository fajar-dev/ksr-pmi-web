<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    public $timestamps = true;
    protected $table = 'libraries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'file',
        'download_count',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
}
