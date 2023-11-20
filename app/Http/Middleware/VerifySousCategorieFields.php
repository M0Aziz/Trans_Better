<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifySousCategorieFields
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      

        if (empty($request->input('nom')) ) {
            return redirect()->back()->with('error', 'Les champs "nom" sont obligatoires.');
        }

        if (strlen($request->input('nom')) > 100) {
            return redirect()->back()->with('error', 'Le champ "nom" ne doit pas dépasser 100 caractères.');
        }

        return $next($request);
    }
}
