<?php

namespace App\Http\Middleware;
use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;

use Closure;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next)
    {
        try {
            if (!$request->hasHeader('Authorization')) {
                throw new \Exception();
            }
            $authorizationHeader = $request->header('Authorization');
            $token = str_replace('Bearer ', '', $authorizationHeader);
            $dadosAutenticacao = JWT::decode($token, env('JWT_PASS'), ['HS256']);

            $user = User::where('email', $dadosAutenticacao->email)
                ->first();
            if (is_null($user)) {
                throw new \Exception();
            }

            return $next($request);
        } catch (\Exception $e) {
            return response()->json('401 Unauthorized', 401);
        }
    }
}