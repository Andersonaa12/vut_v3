<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Brand;
use User;
class LoginController extends Controller
{
    public function getLogin(Request $request)
    {
        
        $brand_id = Config::get('app.brand_id');
        $brand = Brand::findOrFail($brand_id);
        if(!session()->has('from'))
        {
            session()->put('from', url()->previous());
        }
        if (Auth::check()) {
            return redirect()->to($brand->id.'/admin/home');
        }
        return view('auth.login', compact('brand'));
    }

    public function do_Login(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'username' => 'required|string',
            'password' => 'required|string|min:8',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $user = User::where('email', $request->username)
                    ->orWhere('user_name', $request->username)
                    ->first();
    
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user, $request->has('remember'));
            return redirect(brand_route('admin.home.index'))->with([
                'success' => 'Bienvenido ' . $user->full_name,
                'user' => $user,
            ]);
        }
    
        return back()->withErrors([
            'error' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput();
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect(brand_route('admin.login'))->with('success', 'Has cerrado sesión correctamente.');
    }

}
