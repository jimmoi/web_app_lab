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
        $form_mode = "create";
        return view("createPlant", compact("garden_data", "form_mode"));
    }

    public function addPlant(Request $request) {
        $new_plant = new Plant;
        $new_plant->plant_name = $request->plant_name;
        $new_plant->scientific_name = $request->sci_name;
        $new_plant->garden_id = $request->garden_id;
        $new_plant->save();
        return redirect(route("plant_list_page"));
    }

    public function editform($plant_id) {
        $garden_data = Garden::all();
        $edit_row = Plant::find($plant_id);
        $form_mode = "edit";
        return view("createPlant", compact("garden_data", "edit_row", "form_mode", "plant_id"));
    }

    public function editPlant(Request $request) {
        $edit_row = Plant::find($request->plant_id);
        $edit_row->plant_name = $request->plant_name;
        $edit_row->scientific_name = $request->sci_name;
        $edit_row->garden_id = $request->garden_id;
        $edit_row->save();
        return redirect(route("plant_list_page"));
    }

    public function destroy(Request $request) {
        Plant::destroy($request->plant_id);
        return redirect(route("plant_list_page"));
    }
}
