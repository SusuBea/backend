<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
   
    public function index(){ 

        $szavaks = response()->json(Szavak::all()); 

        return $szavaks; 

    } 

 

    public function show($id){ 

        $szavak = response()->json(Szavak::find($id)); 

        return $szavak; 

    } 

 

    public function store(Request $request){ 

        $szavak = new Szavak(); 

        $szavak->angol = $request->angol; 

        $szavak->maygar = $request->maygar; 

        $szavak->temaId = $request->temaId; 

 

        $szavak->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $szavak = Szavak::find($id); 

        $szavak->angol = $request->angol; 

        $szavak->maygar = $request->maygar; 

        $szavak->temaId = $request->temaId; 

 

        $szavak->save(); 

    } 

 

    public function destroy($id){ 

        Szavak::find($id)->delete(); 

    } 






   
}
