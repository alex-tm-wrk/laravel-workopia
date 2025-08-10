<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(): View
    {
        // Get logged-in user
        $user = Auth::user();

        // Get the user listings
        $jobs = Job::where('user_id', $user->id)->with('applicants')->get();

        return view('dashboard.index', compact('user', 'jobs'));
    }
}
