<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Worker;
use App\Models\Client;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workers = Worker::all();
        $clients = Client::all();
        return view('project.create', compact('workers', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'deadline' => 'date',
            'status' => '',
            'worker_id' => '',
            'client_id' => '',
        ]);

        Project::create($data);
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $statuses = [
            'To-do',
            'In progress',
            'Done',
            'Delayed'
        ];
        $workers = Worker::all();
        $clients = Client::all();
        return view('project.edit', compact('project', 'statuses', 'workers', 'clients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = request()->validate([
            'title' => 'string',
            'description' => 'string',
            'deadline' => 'date',
            'status' => '',
            'worker_id' => '',
            'client_id' => '',
        ]);
        $project->update($data);
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('project.index');
    }
}
