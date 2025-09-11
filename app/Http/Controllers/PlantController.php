<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plant;
use App\Models\Garden;

class PlantController extends Controller
{
    public function index() {
        $plant_data = Plant::all();
        return view("plants", compact("plant_data"));
    }

    public function showform() {
        $garden_data = Garden::all();
        return view("createPlant", compact("garden_data"));
    }

    public function addPlant(Request $request) {
        $new_plant = new Plant;
        $new_plant->plant_name = $request->plant_name;
        $new_plant->scientific_name = $request->sci_name;
        $new_plant->garden_id = $request->garden_id;
        $new_plant->save();
        return redirect(route("plant_list_page"));
    }
}
