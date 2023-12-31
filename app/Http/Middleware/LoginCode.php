<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCode
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();
        if(auth()->check() && $user->code){
            if(!$request->is('verify')){
                return response()->json([
                    'status' => false,
                    'message' => 'Code Is Invalied',
                ], 405);
            }
        }
        return $next($request);
    }
}
