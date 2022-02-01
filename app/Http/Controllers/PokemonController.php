<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PokemonController extends Controller
{
    public function login(){
        return view('login'); 
    }

    public function index(){
        $pokemon=DB::select('select * from pokemon');
        return view('pokedex',['pokemons'=>$pokemon]); 
    }

    public function read(Request $request){
        if($request->input('q')!=''){
            if ($request->input('q')=='favorito') {
                $pokemon=DB::select('select * from pokemon where favorito = 1');
            }else{
                $pokemon=DB::select('select * from pokemon where nombre like ?', ["%".$request->input('q')."%"]);
            }
        }else{
            $pokemon=DB::select('select * from pokemon');
        }
        return response()->json($pokemon);
    }

    public function updateFav(Request $request){
        // code...
    }
    public function updateImage(Request $request){
        // code...
    }
}
