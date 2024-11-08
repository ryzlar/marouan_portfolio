<?php

use App\Models\Contact;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $contactForms = Contact::all();
        $projects = Project::all();

        return view('dashboard', compact('contactForms', 'projects'));
    }
}
