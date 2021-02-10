<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;

class EstabelecimentosController extends Controller
{
   
    public function index(){

        return Estabelecimento::all();
    }

    public function store(Request $request){
        
        return response()
        ->json(Estabelecimento::create(['nome'=>$request->nome]), status:201);
    }
    public function get(int $id){
        $estabelecimento = Estabelecimento::find($id);
    }

    //
}
