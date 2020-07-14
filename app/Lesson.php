<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'body',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); //select * from users where lesson_id = user_id
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class , 'lesson_tags');
    }
}
