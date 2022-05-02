<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

// see "EnsureEmailIsVerified" as reference
class EnsureEmailHasInbox
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next, $redirectToRoute = null)
    {
        if ( ! $request->user() || ! ($request->user()->email_inbox_verified_at) ) {
            $request->session()->flush();
            return $request->expectsJson()
                    ? abort(403, 'Your account is not verified.')
                    //: Redirect::guest(URL::route($redirectToRoute ?: 'login'));
                    : redirect()->route('login')->with(['status' => 'Your account is not verified!']);
                    //: redirect('/login')->with(['status' => 'Your account is not verified!']);
                    //: view('welcome');
        }

        return $next($request);
    }
}
