<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'created_at'];

    public function topics() {
        return $this->hasMany(Topic::class);
    }

}
