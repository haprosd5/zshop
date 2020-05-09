<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        /** login nguoi dung */
        if ($request->isMethod('post')) {

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect('admin/dashbroad');
            } else {
                return redirect('admin/login')->with('mess', 'Ban gap loi dang nhap roi!');
            }
        }
        /** load form dang nhap */
    	return view('admin.admin_login');
    }

    /*hien thi dashbroad*/
    public function dashbroad()
    {
    	# code...
    	return view('admin.dashbroad');
    }

    /*logout*/
    public function logout()
    {
        # code...
        Auth::logout();
        return redirect('admin/login')->with('mess', 'Ban da thoat dang nhap, tam biet!');
    }
}
