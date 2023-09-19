<?php

namespace App\Http\Middleware;

use App\Models\Franchisee as ModelsFranchisee;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class Franchisee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session::get('FRANCHISEE_ID') == ""){
            return to_route('franchisee.login');
        }else {
            $franchiseeDetails = ModelsFranchisee::find(Session::get('FRANCHISEE_ID'));
            if($franchiseeDetails){
                View::share('franchiseeDetails',$franchiseeDetails);
            }
        }
        
        return $next($request);
    }
}
