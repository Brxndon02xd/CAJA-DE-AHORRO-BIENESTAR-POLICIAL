<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriaController extends Controller
{
    public function informacionCategoria(){
        $getCategoria = Categorias::all();
        //dd($getCategoria);
        return view("SitioWeb/Categorias/Informacion", compact('getCategoria'));
      }
  
      public function editarCategoria($id){
         //dd($id);
         $editCategoria = Categorias::where('id', $id)->firstOrFail();
        //dd($editCliente);
        return view('SitioWeb/Categorias/editarCa', compact('editCategoria'));
      }
  
      public function actualizar(Request $request, $id){
          //dd($id, $request->nombre, $request->apellido);
          $actualiCategoria = Categoria::findOrFail($id);
          $requestCategoria = $request->all();
          $actualiCategoria->update($requestCategoria);
          return redirect()->to('/informacion');
      }
}
