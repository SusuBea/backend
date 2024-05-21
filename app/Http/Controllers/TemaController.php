<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function index(){ 

        $temas = response()->json(Tema::all()); 

        return $temas; 

    } 

 

    public function show($id){ 

        $tema = response()->json(Tema::find($id)); 

        return $tema; 

    } 

 

    public function store(Request $request){ 

        $tema = new Tema(); 

        $tema->temaNev = $request->temaNev; 

        $tema->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $tema = Tema::find($id); 

        $tema->temaNev = $request->temaNev;

        $tema->save(); 

    } 

 

    public function destroy($id){ 

        Tema::find($id)->delete(); 

    } 

    function szavak_temankent($id){
        return DB::table('szavaks as s')
        -> where('temaId', "=", "id")
        -> get();

    }


   
}
