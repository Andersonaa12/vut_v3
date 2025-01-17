<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;

use Brand;
use User;
class LoginController extends Controller
{
    public function getLogin()
    {
        $brand_id = Config::get('app.brand_id');
        $brand = Brand::findOrFail($brand_id);
        if(!session()->has('from'))
        {
            session()->put('from', url()->previous());
        }

        return view('auth.login', compact('brand'));
    }
}
