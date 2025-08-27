<?php

namespace App\Http\Controllers\Backend\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Notifications\NewNotification;
use User;


class HomeController extends Controller
{
    public function index()
    {
        $user = User::find(2);
        $sender = User::find(1);
        $user->notify(new NewNotification("PRUEBAS DE NOTIFICACIONES","cds asjfhkaksfhaksfjknasf aslfnaslflaksf ", $sender));

        $notifications = auth()->user()->unreadNotifications;
       
        return view('admin.home.index', compact('notifications'));
    }
}
