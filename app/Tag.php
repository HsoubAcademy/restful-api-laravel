<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class , 'lesson_tags');
    }
}
