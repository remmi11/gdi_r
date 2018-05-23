<?php

namespace App\Http\Controllers;

use App\Http\Models\MasterGeom;
use App\Http\Models\PaymentOptions;
use App\Http\Models\SiteCoupon;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('role_id', '!=', 2)->orderBy('users.id', 'desc')->get();

        return view('users')->with(compact(['users']));
    }

    public function show(Request $request, $id)
    {
        $user_info = User::find($id);
        return view('show')->with(compact(['user_info']));
    }


    protected function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = [
                'email' => 'email|required|unique:users',
                'password' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

            $user = new User();
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect('/users');
        }
        return view('create_user');
    }

    protected function update(Request $request)
    {
        if ($request->isMethod('post')) {
            $rules = [
                'email' => 'email|required|unique:users'.$request->input('id'),
                'password' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
            $user = User::find($request->input('id'));
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->save();

            return redirect()->back();
        }
    }

    protected function delete(Request $request, $id)
    {
        User::find($id)->delete();
        return redirect('/users');
    }

}
