<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'category_posts');
    }
}
