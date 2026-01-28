<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Untuk memberi izin pengisian data
    protected $fillable = ['name', 'price', 'category', 'status'];
}