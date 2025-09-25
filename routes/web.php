<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gardenController;
use App\Http\Controllers\PlantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/garden', [gardenController::class,'index']);
    Route::get('/plants', [PlantController::class,'index'])->name("plant_list_page");
    Route::get('/plants/create', [PlantController::class,'showform'])->name("add_plant_page");
    Route::post('/plants/create', [PlantController::class,'addPlant'])->name("add_plant");
    Route::get('/plants/{plant_id}', [PlantController::class,'editform'])->name("plants.form");
    Route::post('/plants/edit', [PlantController::class,'editPlant'])->name("edit_plant");
});
