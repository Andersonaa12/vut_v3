<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Admin\Users\UserController;

Route::get('/users', [UserController::class, 'list'])->name('admin.users.list');
