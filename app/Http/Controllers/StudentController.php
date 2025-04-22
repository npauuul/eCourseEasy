<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function DashShow(): View
    {
        return view('Members.Dash.dashboard');
    }

    public function ProfileShow(): View
    {
        return view('Members.Dash.profile');
    }

    public function SettingsShow(): View
    {
        //return view('Members.Dash.settings');
    }
}
