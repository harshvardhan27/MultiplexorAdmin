<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('home.index', ['username' => $username, 'notifications' => $notifications]);
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }
}