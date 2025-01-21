<?php

/**
 * Archivo: app/Helpers/brandHelper.php
 * 
 * Contiene funciones helpers para manejar rutas con brand_id automáticamente.
 */

if (! function_exists('brand_route')) {
    /**
     * Genera una URL de ruta incluyendo automáticamente el brand_id.
     *
     * @param  string  $name        Nombre de la ruta (ej: 'admin.do_login')
     * @param  array   $parameters  Parámetros adicionales de la ruta
     * @param  bool    $absolute    Indica si se debe generar una URL absoluta
     * @return string
     */
    function brand_route($name, $parameters = [], $absolute = true)
    {
        // Obtener brand_id de config (seteado por el middleware) o de la request
        $brandId = config('app.brand_id') ?: request()->route('brand_id');

        // Si no hay brand_id en $parameters, lo seteamos
        if (!isset($parameters['brand_id'])) {
            $parameters['brand_id'] = $brandId;
        }

        // Retornar la ruta generada
        return route($name, $parameters, $absolute);
    }
}
