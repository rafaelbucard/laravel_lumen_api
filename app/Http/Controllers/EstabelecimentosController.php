<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use App\Models\Cliente;
use Illuminate\Http\Request;



class EstabelecimentosController extends BaseController 
{

    public function __construct()
    {
        $this->classe = Estabelecimento::class;
    }
    public function clientesBusca(int $estabelecimento_id) {
        $base = Estabelecimento::find($estabelecimento_id);

        if(is_null($base)){
            return response()->json(['erro'=>'404'],status: 404);  
        } 
        $clientes = Cliente::query()
        ->where('estabelecimento_id',$estabelecimento_id)
        ->get();
        return $clientes;
    }


    public function clientesPost( Request $request,int $estabelecimento_id){
        //$estabelecimento_id=intval($estabelecimento_id);
        $base = Estabelecimento::find($estabelecimento_id);
        if(is_null($base)){
            return response()->json(['erro'=>'404'],status: 404);   
        } 
        return response()
        ->json(Cliente::create([
            'nome' => $request->input('nome'),
            'email' =>  $request->input('email'),
            'estabelecimento_id' => $estabelecimento_id   
        ]));
    }


    public function clientesUpdate(Request $request, $estabelecimento_id, int $id){
        $base1 = Estabelecimento::find($estabelecimento_id);
        $base2= Cliente::find($id);
        if($base2->estabelecimento_id == $base1->id){
          response()->json( $base2->fill([
                'nome' => $request->input('nome'),
                'email' =>  $request->input('email'),
                'estabelecimento_id' => $estabelecimento_id     
            ]));
            $base2->save();
            return $base2;
            exit;
        }
        return response()->json(['erro'=>'404'],status: 404);
    }
    public function clientesId($estabelecimento_id, int $id){
        $base1 = Estabelecimento::find($estabelecimento_id);
        $base2= Cliente::find($id);
        if($base2->estabelecimento_id == $base1->id){
            $base2 = Cliente::query()
            ->where('id',$id)
            ->get();
            return response()->json($base2);
                
            
        }
        return response()->json(['erro'=>'404'],status: 404);
    }
}
    


    
