<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateMoyenInput
{
    public function handle(Request $request, Closure $next)
    {
        $validator = Validator::make($request->all(), [
            'numero' => 'required|integer',
            'description' => 'required|string',
            'horaire' => 'required|date_format:H:i',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        return $next($request);
    }
}
