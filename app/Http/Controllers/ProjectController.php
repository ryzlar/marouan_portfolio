<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('profile.projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.addproject');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'vak' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Project::create($request->only(['name', 'vak', 'description']));

        return redirect()->route('dashboard')->with('success', 'Project succesvol toegevoegd.');
    }

    public function showProjects()
    {
        $projects = Project::all();
        return view('profile.dashboard', compact('projects'));
    }

    public function show(Project $project)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $project = Project::findOrFail($project->id);
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'vak' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $project = Project::findOrFail($project->id);
        $project->name = $request->input('name');
        $project->vak = $request->input('vak');
        $project->description = $request->input('description');
        $project->save();

        return redirect()->route('dashboard')->with('success', 'Project updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $projects = Project::findOrFail($project->id);
        $projects->delete();

        return redirect()->url('dashboard')->with('success', 'Project succesvol verwijderd.');
    }

}
