<?php

namespace App\Http\Controllers;

use App\Models\Device;
use App\Models\Rom;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function show($device)
    {
        // Fetch the device by codename or name
        $deviceModel = Device::where('codename', $device)->orWhere('name', $device)->firstOrFail();

        // Get available ROMs for this device
        $roms = Rom::where('device_id', $deviceModel->id)->get();

        return view('device', compact('deviceModel', 'roms'));
    }
}