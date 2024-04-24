<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteTopic extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'topic_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}