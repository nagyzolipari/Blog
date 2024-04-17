<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicType extends Model
{
    use HasFactory;

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

}
