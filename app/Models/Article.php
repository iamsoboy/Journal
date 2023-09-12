<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
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
    public function journal()
    {
        return $this->belongsTo(Journal::class)->orderByDesc('id');
    }

    public function getImagePath()
    {
        if ($this->image) {
            return config('app.url')."/storage/".$this->image;
        }
        return "https://dummyimage.com/720x400";
    }
}
