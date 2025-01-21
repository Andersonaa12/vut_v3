<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '{brand_id}', 'middleware' => 'verify.brand'], function () {
    // Todas las rutas internas están dentro del prefijo de brand_id
    Route::get('/', [LoginController::class, 'getLogin'])->name('admin.login');
    Route::post('login/submit', [LoginController::class, 'do_Login'])->name('admin.do_login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');


    Route::group(['middleware' => ['auth', 'verify.brand']], function () {
        require base_path('routes/admin/routes.php');
    });
});


