<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Rom;
use App\Models\TeamMember;
use App\Models\TeamApplication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Get statistics for the dashboard
        $stats = [
            'devices_count' => Device::count(),
            'roms_count' => Rom::count(),
            'team_count' => TeamMember::count(),
            'applications_count' => TeamApplication::where('status', 'pending')->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    public function devices()
    {
        $devices = Device::orderBy('name')->paginate(10);
        return view('admin.devices', compact('devices'));
    }

    public function roms()
    {
        $roms = Rom::with('device')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.roms', compact('roms'));
    }

    public function content()
    {
        return view('admin.content');
    }

    public function applications()
    {
        $applications = TeamApplication::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.applications', compact('applications'));
    }

    public function languages()
    {
        return view('admin.languages');
    }
}