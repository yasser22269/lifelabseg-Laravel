<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use  App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{

    public function login()
    {
        return view('welcome');
    }

    public function postLogin(AdminLoginRequest $request)
    {


        if (auth()->attempt(['email' => $request->input("email"),
         'password' => $request->input("password") ])) {
            return redirect()->route('Admin');
        }
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }

    public function logout()
    {

        $gaurd = $this->getGaurd();
        $gaurd->logout();

        return redirect()->route('login');
    }

    private function getGaurd()
    {
        return auth('web');
    }
}
