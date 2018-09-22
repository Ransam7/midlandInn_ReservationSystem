<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class CheckRole
{

    private $auth;
    
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role=null)
    {

        if($role==null)
        {
            if($this->auth->check())
            {
                if($role==null)
                {
                    $checkRole = $this->auth->user()->userRole->name;

                    if($checkRole==='Customer')
                        return redirect('404');
                }
                
            }else
                return redirect('404');

            return $next($request);

        }else{

            if($this->auth->check() && $this->auth->user()->userRole())
            {
                $checkRole = $this->auth->user()->userRole->name;
                if($role!==$checkRole)
                    return redirect('404');
            }else
                    return redirect('404');    
            }
        
        
        return $next($request);
    }


    // public function handle($request, Closure $next,$role=null)
    // {
    //     if($this->auth->check())
    //     {
    //         if($role==null)
    //         {
    //             $checkRole = $this->auth->user()->userRole->name;

    //             if($checkRole==='Customer')
    //                 return redirect('404');

    //         }
    //     }
    //     else
    //         return redirect('404');

        
        
    //     return $next($request);
    // }
}
