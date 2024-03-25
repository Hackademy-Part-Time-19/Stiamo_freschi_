<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['title', 'price', 'description', 'category_id', 'user_id'];


    public function toSearchableArray()
    {

        $category = $this->category;
        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'category'=> $category,
        ];
        return $array; 
    }
    
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    
}

