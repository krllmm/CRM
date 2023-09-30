<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('dashboard.dashboard', compact('users'));
    }
}
