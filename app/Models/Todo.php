<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillabled = [
        'title',
        'content',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
