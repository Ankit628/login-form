<?php

namespace App\Http\Controllers;

use Session;
use App\LoginInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginConfig extends Controller
{
    public function  config(Request $request)
    {
        $logins = DB::table('login_infos')->select('id', 'email', 'password')->get();
        foreach ($logins as $login) :
            if ($login->email == $request->Email) {
                $email = true;
                if ($email) {
                    if ($login->password == $request->Password) {
                        Session::flash('message', 'Logged in Successfully');
                        return redirect('/');
                    } else {
                        Session::flash('message', 'Password Incorrect');
                        return redirect('/login');
                    }
                } else {
                    Session::flash('message', 'Invalid Email');
                    return redirect('/login');
                }
            }
            else{
                Session::flash('message','Please enter a valid Email');
                return redirect('/login');
            }
        endforeach;
    }
}
