<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ["title", "des", "detail", "category", "public", "data_public", "position", "thumbs"];
    use HasFactory;
}
