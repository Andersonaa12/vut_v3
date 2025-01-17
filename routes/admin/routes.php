<?php

// Rutas de Almacén
Route::prefix('admin')->group(function(){
  require base_path('routes/admin/users/routes.php');
  require base_path('routes/admin/entries/routes.php');
});
