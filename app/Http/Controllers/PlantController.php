<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plant;

class PlantController extends Controller
{
    public function index() {
        $plant_data = Plant::all();
        return view("plants", compact("plant_data"));
    }
}
