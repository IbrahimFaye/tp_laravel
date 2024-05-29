<?php

use Illuminate\Support\Facades\Route;
use App\Models\Terrain;
use App\Models\Type;

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

    $terrains = Terrain::paginate(10);
    $types = Type::all();
     return view('liste_terrain',compact('types','terrains'));

});
Route::get('/ajout_terrain',  'App\Http\Controllers\TerrainController@create')->name('ajout_terrain');
Route::post('/save_terrain',  'App\Http\Controllers\TerrainController@save')->name('save.terrain');
Route::get('/modifi/{terrain}',  'App\Http\Controllers\TerrainController@modifi')->name('modifi.terrain');
Route::get('/supprime/{terrain}',  'App\Http\Controllers\TerrainController@delete')->name('supprime.terrain');
Route::put('/update/{terrain}',  'App\Http\Controllers\TerrainController@update')->name('update.terrain');
