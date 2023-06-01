<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'content', 'image', 'category_id',];

    public function scopeFilter($query, array $filters)
    {
        if($filters['category_id'] ?? false)
        {
            $query->where('category_id', 'like', '%' . request('category_id') . '%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('content', 'like', '%' . request('search') . '%')
            ->orWhere('category_id', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
