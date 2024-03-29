<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'price', 'location', 'images', 'status', 'category', 'description'];

    public function scopeFilter($query, array $filters)
    {
        if($filters['category'] ?? false)
        {
            $query->where('category', 'like', '%' . request('category') . '%');
        }

        if($filters['search'] ?? false)
        {
            $query->where('title', 'like', '%' . request('search') . '%')
            ->orWhere('location', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('category', 'like', '%' . request('search') . '%');
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
