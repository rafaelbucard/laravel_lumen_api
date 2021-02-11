<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



 abstract class BaseController extends Controller
{
    protected $classe;
    public function index(){

        return $this->classe::all();
    }

    public function page(Request $request){

        return $this->classe::paginate($request->perPage);
    }


    public function store(Request $request){
       
        return response()
        ->json($this->classe::create($request->all()), status:201);
    }
    public function show(int $id){
        $base = $this->classe::find($id);
        if(is_null($base)){
            return response()->json(data:[],status: 204);
        }
        return response()->json($base);
    }
    public function update(int $id, Request $request){
        $base = $this->classe::find($id);
       
        if(is_null($base)){
            return response()->json(['erro'=>'404'],status: 404);
        }
        $base->fill($request->all());
        $base->save();

        return $base;
    }
    public function destroy(int $id){
        $baseDestroy = $this->classe::destroy($id);
        if($baseDestroy === 0){
            return response()->json(['erro'=>'404'],status: 404);
        }
        return response()->json(data:[],status: 204);    }

    //
}
