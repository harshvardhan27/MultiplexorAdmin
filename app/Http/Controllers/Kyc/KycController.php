<?php

namespace App\Http\Controllers\Kyc;

use App\Collateral\Collateral;
use App\Kyc\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageServiceProvider;
use Symfony\Component\DomCrawler\Image;

class KycController extends Controller
{
    public function index()
    {
        if (Session::exists('user')) {
            $username = Session::get('user');
            if ($username == "admin@gmail.com") {
                $kycDetails = UserDetail::all();
            } else {
                $kycDetails = UserDetail::where('email', '=', $username)->get();
            }
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('kyc.index', ['username' => $username, 'kycDetails' => $kycDetails, 'notifications' => $notifications]);
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
            $collaterals = Collateral::where('email', '=', $username)
                ->where('collateral_verified', '=', 'Y')
                ->get();
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('kyc.create', ['username' => $username, 'collaterals' => $collaterals, 'notifications' => $notifications]);
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
                'firstname' => 'required',
                'lastname' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'pin' => 'required',
                'collateral_id' => 'required',
                'ethereum_address' => 'required',
                'kyc_docs_img1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'kyc_docs_img2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'

            ], [
                'firstname.required' => 'Firstname field is required.',
                'lastname.required' => 'Lastname field is required.',
                'address.required' => 'Address field is required.',
                'city.required' => 'City field is required.',
                'state.required' => 'State field is required.',
                'pin.required' => 'Pin field is required.',
                'collateral_id.required' => 'Collateral Id field is required.',
                'ethereum_address.required' => 'Ethereum Address field is required.',
                'kyc_docs_img1.required' => 'Document 1 field is required.',
                'kyc_docs_img2.required' => 'Document 2 field is required.'
            ]);


            $userDetail = new UserDetail([
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
                'address' => $request->input('address'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'pin' => $request->input('pin'),
                'collateral_id' => $request->input('collateral_id'),
                'ethereum_address' => $request->input('ethereum_address'),
                'user_profile_verified' => 'N',
                'user_profile_locked' => 'N',
                'email' => Session::get('user'),
                'kyc_docs_img1' => base64_encode(file_get_contents($request->file('kyc_docs_img1')->getRealPath())),//$request->file('kyc_docs_img1'),
                'kyc_docs_img1_mime' => $request->file('kyc_docs_img1')->getMimeType(),
                'kyc_docs_img2' => base64_encode(file_get_contents($request->file('kyc_docs_img2')->getRealPath())),//$request->file('kyc_docs_img2')
                'kyc_docs_img2_mime' => $request->file('kyc_docs_img2')->getMimeType()
            ]);

            $userDetail->save();

            return redirect()->route('kyc');
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
            $userDetail = UserDetail::find($id);
            $collateral = Collateral::find($userDetail->collateral_id);
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('kyc.edit', ['username' => $username, 'userDetail' => $userDetail, 'collateral' => $collateral, 'notifications' => $notifications]);
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
                'credit_score' => 'required|numeric',
                'user_profile_verified' => 'required',
                'user_profile_locked' => 'required'
            ], [
                'credit_score.required' => 'Credit Score field is required',
                'user_profile_verified.required' => 'Verified field is required.',
                'user_profile_locked.required' => 'Locked field is required.'
            ]);

            $userDetail = UserDetail::find($request->input('user_id'));
            $userDetail->credit_score = $request->input('credit_score');
            $userDetail->user_profile_verified = $request->input('user_profile_verified');
            $userDetail->user_profile_locked = $request->input('user_profile_locked');
            $userDetail->save();
            return redirect()->route('kyc');
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
            $userDetail = UserDetail::find($id);
            $notifications = DB::table('notification_view')
                ->where('notification_type','!=',null)
                ->get();
            return view('kyc.delete', ['username' => $username, 'userDetail' => $userDetail, 'notifications' => $notifications]);
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }

    public function delete_post(Request $request)
    {
        if (Session::exists('user')) {
            $userDetail = UserDetail::find($request->input('user_id'));
            $userDetail->delete();
            return redirect()->route('kyc');
        } else {
            Session::flush();
            Session::remove('user');
            return redirect()->route('login');
        }
    }
}
