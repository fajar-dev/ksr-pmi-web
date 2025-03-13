<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    public $timestamps = true;
    protected $table = 'category_posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'post_id',
        'category_id',
    ];
}
