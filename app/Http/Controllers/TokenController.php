<?php
namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller {
public function createToken(Request $request) {

    $this->validate($request,[
        'email' =>'required|email',
        'password' => 'required'
    ]);
    $usuario = User::where('email', $request->email)->first();
        
        if($usuario->email == $request->email && $request->password == $usuario->password){
            $token= JWT::encode(
                ['email'=> $request->email], 
            env('JWT_pass'));
            return [
                'access_token'=>$token  ];
        }

   
        return response()->json(data:'Usuário ou senha inválido', status:401);
  
}
}