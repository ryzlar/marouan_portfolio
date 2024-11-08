<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        $contactForms = Contact::all();
        $projects = Project::all();

        return view('profile.dashboard', compact('contactForms', 'projects'));
    }
}
