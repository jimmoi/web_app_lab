<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Garden;

class Plant extends Model
{
    use HasFactory;

    public function garden() {
        return $this->belongsTo(Garden::class);
    }
}
