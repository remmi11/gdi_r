<?php

namespace App\Http\Controllers;

use App\Http\Models\MasterGeom;
use App\Http\Models\PaymentOptions;
use App\Http\Models\SiteCoupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SiteController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:8',
            ]);

            if ($validator->fails()) return redirect('/login')->withErrors($validator)->withInput();

            if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                return redirect('/form');
            } else
                return view('auth.login')->with('info', 'Wrong username or passsword');
        }

        return view('auth.login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function populate(Request $request)
    {
        $value_15 = $request->input('value_15');
        $value_16 = $request->input('value_16');
        $value_17 = $request->input('value_17');
        $value_18 = $request->input('value_18');
        $value_19 = $request->input('value_19');
        $value_21 = $request->input('value_21');
        $value_23 = $request->input('value_23');
        $value_24 = $request->input('value_24');
        $value_25 = $request->input('value_25');

        if($request->input('type')==15){
            $list = MasterGeom::where('join_type',$value_15)->select('county')->OrderBy('county')->distinct()->get();
            return $list;
        }
        if($request->input('type')==16 && $request->input('value_15')=='prad'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->select('subdivisio')->OrderBy('subdivisio')->distinct()->get();
            return $list;
        }
        if($request->input('type')==17 && $request->input('value_15')=='prad'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('subdivisio',$value_17)->select('unit_numbe')->OrderBy('unit_numbe')->distinct()->get();
            return $list;
        }
        if($request->input('type')==18 && $request->input('value_15')=='prad'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('subdivisio',$value_17)->where('unit_numbe',$value_18)->select('block_numb')->OrderBy('block_numb')->distinct()->get();
            return $list;
        }
        if($request->input('type')==19 && $request->input('value_15')=='prad'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('subdivisio',$value_17)->where('unit_numbe',$value_18)->where('block_numb',$value_19)->select('lot_number')->OrderBy('lot_number')->distinct()->get();
            return $list;
        }


        if($request->input('type')==16 && $request->input('value_15')=='rural'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->select('l1surnam')->OrderBy('l1surnam')->distinct()->get();
            return $list;
        }

        if($request->input('type')==21 && $request->input('value_15')=='rural'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('l1surnam',$value_21)->select('l2block')->OrderBy('l2block')->distinct()->get();
            return $list;
        }
        if($request->input('type')==23 && $request->input('value_15')=='rural'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('l1surnam',$value_21)->where('l2block',$value_23)->select('l3surnum')->OrderBy('l3surnum')->distinct()->get();
            return $list;
        }


        if($request->input('type')==16 && $request->input('value_15')=='plss'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->select('meridian')->OrderBy('meridian')->distinct()->get();
            return $list;
        }
        if($request->input('type')==24 && $request->input('value_15')=='plss'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('meridian',$value_24)->select('t_r')->OrderBy('t_r')->distinct()->get();
            return $list;
        }
        if($request->input('type')==25 && $request->input('value_15')=='plss'){
            $list = MasterGeom::where('join_type',$value_15)->where('county',$value_16)->where('meridian',$value_24)->where('t_r',$value_25)->select('section')->OrderBy('section')->distinct()->get();
            return $list;
        }
    }
}
