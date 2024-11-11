<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Festival;
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

        return redirect()->route('dashboard')->with('addproject', 'Project succesvol toegevoegd.');
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
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('profile.editproject', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
        $project->update($request->all());
        $project->save();
        return redirect('/dashboard')->with('addproject', 'Festival updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/dashboard')->with('addproject', 'Project verwijderd!');
    }

}
