<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Announcement;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['path'];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}