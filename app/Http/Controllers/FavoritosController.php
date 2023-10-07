<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favoritos;

class FavoritosController extends Controller
{
  public function store(Request $request){
    
    $direccionCompleta = $request->ciudad;

    $existeFavorito = Favoritos::where('ciudad', $direccionCompleta)->exists();

    if($existeFavorito){
      return redirect()->back()->with('errr','Ya existe un favorito con esta ciudad');
    }

    $fav = new Favoritos();
    $fav -> ciudad = $direccionCompleta;
    $fav-> save();

    // return redirect()->back();
    return redirect()->route('favoritos')->with('success','Agregado a favoritos');
    
  }
  
  
  public function index(){
    $favoritos = Favoritos::all();
    
    
    return view('Favoritos.favoritos', ['favoritos' => $favoritos]);
  }
  
  public function destroy($id){
    // dd($id);
    $todo = Favoritos::find($id);
    $todo->delete();
    
    return redirect()->route('favoritos')->with('success','Agregado a favoritos');
  }
  
  
}
