<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Definisikan relasi one-to-many ke Medicine
    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }

}
