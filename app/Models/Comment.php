<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'parent_id', 'message'];

    // Relasi ke komentar induk (parent)
    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    // Relasi ke balasan komentar (replies)
    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
