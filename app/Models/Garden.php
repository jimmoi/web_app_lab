<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plant;
use App\Models\GardenManager;

class Garden extends Model
{
    use HasFactory;

    public function plant() {
        return $this->belongsTo(Plant::class);
    }

    public function garden_managers() {
        return $this->hasMany(GardenManager::class);
    }
}
