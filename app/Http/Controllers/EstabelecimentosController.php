<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class EstabelecimentosController extends Controller
{
   
    public function index(){

        return Estabelecimento::all();
    }

    public function store(Request $request){
        
        return response()
        ->json(Estabelecimento::create(['nome'=>$request->nome]), status:201);
    }
    public function show(int $id){
        $estabelecimento = Estabelecimento::find($id);
        if(is_null($estabelecimento)){
            return response()->json(['status'=>'204'],status: 204);
        }
        return response()->json($estabelecimento);
    }
    public function update(int $id, Request $request){
        $estabelecimento = Estabelecimento::find($id);
        if(is_null($estabelecimento)){
            return response()->json(['erro'=>'404'],status: 404);
        }
        $estabelecimento->fill(['nome'=> $request->nome]);
        $estabelecimento->save();

        return $estabelecimento;
    }

    //
}
