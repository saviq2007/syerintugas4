<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Pastikan hanya kolom yang relevan untuk penugasan massal
    protected $fillable = ['name', 'email', 'phone']; // Kolom yang diizinkan untuk mass assignment
}

