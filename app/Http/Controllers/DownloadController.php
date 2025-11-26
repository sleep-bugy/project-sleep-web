<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $type_filter = $request->input('type');

        $devices = Device::query();

        if ($query) {
            $devices = $devices->where('name', 'like', "%{$query}%")
                             ->orWhere('codename', 'like', "%{$query}%");
        }

        $devices = $devices->orderBy('name')->paginate(20);

        return view('download', compact('devices', 'query', 'type_filter'));
    }
}