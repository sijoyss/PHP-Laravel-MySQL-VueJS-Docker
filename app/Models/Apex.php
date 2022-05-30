<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apex extends Model
{
    use HasFactory;

        protected $table = 'apex';
        protected $fillable = [
            'name',
        ];
}
