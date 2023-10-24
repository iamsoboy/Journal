<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => 'boolean',
    ];

    /**
     * Relationships
     */
    public function category()
    {
        return $this->belongsTo(Category::class)->orderByDesc('id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class)->orderByDesc('id');
    }

    public function editorialBoards()
    {
        return $this->hasMany(EditorialBoard::class)->orderByDesc('id');
    }
}
