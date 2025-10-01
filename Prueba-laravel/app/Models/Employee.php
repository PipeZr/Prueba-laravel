<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
      // Permitir asignación masiva de estos campos
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'position',
        'salary',
        'skills',
    ];

    // Indicar que "skills" se guarda como JSON y se convierte en array automáticamente
    protected $casts = [
        'skills' => 'array',
    ];
}
