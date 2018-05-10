<?php

namespace App\Http\Controllers\Account;


use App\Account\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AccountController extends Controller
{
    public function login()
    {
        return view('account.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.'
        ]);

        $account = DB::table('login')
            ->where('email', '=', $request->input('email'))
            ->get();

        if ($account->count() > 0) {
            if ($account[0]->email == $request->input('email') && Hash::check($request->input('password'), $account[0]->password)) {
                $user = $account[0]->email;
                //if ($user == "admin@gmail.com" && Hash::check($request->input('password'), $account[0]->password)) {
                    Session::put('user', $user);
                    return redirect()->route('dashboard');
                //}else{
                 // return view('errors.403');
                //}
            } else {
                return redirect()->route('login')->with('returnMessage', 'Invalid email & password. Please try again..!!');
            }
        } else {
            return redirect()->back()->with('returnMessage', 'Invalid email & password. Please try again..!!');
        }
    }

    public function register()
    {
        return view('account.register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email field is required.',
            'password.required' => 'Password field is required.'
        ]);

        //var_dump("Email: ".$request->input('email').', Password: '.$request->input('password'));
        $account = new Account([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        $account->save();
        return redirect()->route('login')->with('returnMessage', 'Registration Successful..!! Please login.');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

}