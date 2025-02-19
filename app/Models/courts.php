<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courts extends Model
{
    use HasFactory;

    public function type() 
    {
        return $this->belongsTo(court_types::class, 'court_type_id');
    }
}
