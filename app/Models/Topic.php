<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type_id', 'description'];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function favouriteBy() {
        return $this->belongsToMany(User::class, 'favourite_topics');
    }

    public function type() {
        return $this->belongsTo(TopicType::class, 'type_id');
    }
}
