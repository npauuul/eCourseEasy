<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, Notifiable;
    
    protected $fillable = [
        'name',
        'category_id',
        'name',
        'description',
        'price',
        'stock'
    ];
}
