<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::InProgress()->get();
        $clients = Client::Recent()->get();
        $tasks = Task::InProgress()->get();
        return view('dashboard.dashboard', compact('projects', 'clients', 'tasks'));
    }
}
