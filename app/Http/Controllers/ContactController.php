<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Festival;
use App\Models\Project;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('test.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'onderwerp' => 'required|string|max:255',
            'bericht' => 'required|string',
        ]);

        Contact::create($validatedData);

        return redirect()->back()->with('success', 'Bericht verzonden!');
    }

    public function showContactForms()
    {
        $contactForms = Contact::all();
        return view('profile.dashboard', compact('contactForms'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::findOrFail($id)->delete();
        return redirect('/dashboard')->with('success', 'bericht verwijderd!');
    }
}
