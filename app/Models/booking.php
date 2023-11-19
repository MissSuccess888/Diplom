<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class booking extends Model
{
    use HasFactory;
	
		protected $casts = [
    'created_at' => 'datetime:d/m/Y', // Свой формат
    'updated_at' => 'datetime:d/m/Y',
];
	}
