<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('account.login');
    }

    public function create(Request $request)
    {
        $data = request()->validate([
            'name' => 'string',
            'email' => 'string',
            'password' => 'string',
        ]);

        User::create($data);
        return redirect()->route('dashboard');
    }

    public function register()
    {
        return view('account.register');
    }

    public function sign_in(Request $request)
    {
        $data = request()->validate([
            'name' => 'string',
            'password' => 'string',
        ]);

        $user = User::where('name', 'admin');

        if (Auth::login($user)) {
            return redirect()->route('project.index');
        }

        return redirect()->route('dashboard');
    }
}
