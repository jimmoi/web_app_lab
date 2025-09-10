<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class gardenController extends Controller
{
    public function index() {
        $garden_data = DB::select("SELECT * FROM gardens;");
        return view("garden", compact("garden_data"));
    }
}
