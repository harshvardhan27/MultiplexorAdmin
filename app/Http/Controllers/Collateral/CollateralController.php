<?php

namespace App\Http\Controllers\Collateral;


use App\Collateral\Collateral;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CollateralController extends Controller
{
    public function index()
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            if ($username == "admin@gmail.com") {
                $collaterals = Collateral::all();
            } else {
                $collaterals = Collateral::where('email', '=', $username)->get();
            }

            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('collateral.index', ['username' => $username, 'collaterals' => $collaterals, 'notifications' => $notifications]);
            //var_dump($notifications);
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function create()
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('collateral.create', ['username' => $username, 'notifications' => $notifications]);

        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function create_post(Request $request)
    {
        if (Session::exists('user')) {
            $this->validate($request, [
                'collateral_type' => 'required',
                'collateral_amount' => 'required|numeric'
            ], [
                'collateral_type.required' => 'Collateral Type field is required.',
                'collateral_amount.required' => 'Collateral Amount field is required.',
                'collateral_amount.numeric' => 'Collateral Amount must be numeric.'
            ]);

            $collateral = new Collateral([
                'collateral_type' => $request->input('collateral_type'),
                'collateral_amount' => $request->input('collateral_amount'),
                'email' => Session::get('user')
            ]);
            $collateral->save();
            return redirect()->route('collateral');
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function edit($id)
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            $collateral = Collateral::find($id);
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('collateral.edit', ['username' => $username, 'collateral' => $collateral, 'notifications' => $notifications]);
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function edit_post(Request $request)
    {
        if (Session::exists('user')) {
            $this->validate($request, [
                'collateral_verified' => 'required',
                'collateral_staked' => 'required'
            ], [
                'collateral_verified.required' => 'Verified field is required.',
                'collateral_staked.required' => 'Stacked field is required.'
            ]);

            $collateral = Collateral::find($request->input('collateral_id'));
            $collateral->collateral_verified = $request->input('collateral_verified');
            $collateral->collateral_staked = $request->input('collateral_staked');
            $collateral->save();
            return redirect()->route('collateral');
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function delete($id)
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            $collateral = Collateral::find($id);
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('collateral.delete', ['username' => $username, 'collateral' => $collateral, 'notifications' => $notifications]);

        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function delete_post(Request $request)
    {
        if (Session::exists('user')) {
            $collateral = Collateral::find($request->input('collateral_id'));
            $collateral->delete();
            return redirect()->route('collateral');
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }
}
