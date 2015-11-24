<?php

namespace App\Http\Middleware;

use App\Clinic;
use Closure;
use Illuminate\Support\Facades\Session;

class StockLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $clinics = Clinic::join('stock', 'clinic.id', '=', 'stock.clinic_id')
            ->join('medication', 'stock.medication_id', '=', 'medication.id')
            ->where('stock.level', '<', 5)
            ->select('clinic.id', 'clinic.name', 'stock.level', 'medication.name as med_name')
            ->get();

        Session::flash('clinics', $clinics);
        return $next($request);
    }
}
