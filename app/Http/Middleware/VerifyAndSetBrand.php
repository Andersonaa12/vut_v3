<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Brand;

class VerifyAndSetBrand
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $brandId = $request->route('brand_id'); // Capturar el parámetro brand_id de la URL

        // Verificar si el brand_id existe en la base de datos
        $brand = Brand::find($brandId);

        if (!$brand) {
            return response()->json(['error' => 'Brand not found'], 404);
        }

        // Configurar el brand_id globalmente
        Config::set('app.brand_id', $brandId);

        // Continuar con la solicitud
        return $next($request);
    }
}
