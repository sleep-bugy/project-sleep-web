<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\TeamApplication;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::where('status', 'active')->orderBy('position')->orderBy('name')->get();
        return view('team', compact('teamMembers'));
    }

    public function apply(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|string|size:2',
            'position' => 'required|string|max:255',
            'experience' => 'required|string',
            'why_join' => 'required|string',
        ]);

        TeamApplication::create([
            'name' => $request->full_name,
            'email' => $request->email,
            'country' => $request->country,
            'position_interest' => $request->position,
            'experience' => $request->experience,
            'why_join' => $request->why_join,
        ]);

        return redirect()->back()->with('status', __('team.application_success_message'));
    }
}