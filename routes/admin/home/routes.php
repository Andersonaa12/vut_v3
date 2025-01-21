<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Admin\Home\HomeController;

Route::get('/home', [HomeController::class, 'index'])->name('admin.home.index');
