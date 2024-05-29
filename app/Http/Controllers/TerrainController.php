<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use App\Models\Type;
use Illuminate\Http\Request;
use function Laravel\Prompts\table;

class TerrainController extends Controller
{
    public function create(){
        $types=Type::all();
        return view('ajout_terrain',compact('types'));
    }
    public function save(Request $request)
    {
        $data=$request->all();
        Terrain::create($data);
    }
    public function modifi($id)
    {
      $terrain=Terrain::find($id);
      $types=Type::all();
      return view('modifi_terrain',compact('terrain','types'));
    }
    public function delete($id)
    {
        $terrain = Terrain::find($id);
        $terrain->delete();

    }
    public function update(Request $request ,$id)
    {
        $terrain = Terrain::find($id);
        $terrain->longueur=$request->input('longueur');
        $terrain->largeur=$request->input('largeur');
        $terrain->type=$request->input('type');
        $terrain->save();

    }
}
