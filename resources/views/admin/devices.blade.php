@extends('layouts.sleepapp')

@section('title', 'Admin - Device Management')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Device Management</h1>
        <p class="text-xl text-blue-200">
            Add, edit, or remove devices from the download system
        </p>
    </div>
</section>

<!-- Device Management Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-white">All Devices</h2>
            <button id="add-device-btn" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                Add New Device
            </button>
        </div>
        
        <div class="card rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-blue-800">
                        <tr>
                            <th class="py-3 px-6 text-left text-white">Device</th>
                            <th class="py-3 px-6 text-left text-white">Codename</th>
                            <th class="py-3 px-6 text-left text-white">ROM Types</th>
                            <th class="py-3 px-6 text-left text-white">Maintainer</th>
                            <th class="py-3 px-6 text-left text-white">Status</th>
                            <th class="py-3 px-6 text-left text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-800">
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Google Pixel 7 Pro</td>
                            <td class="py-4 px-6 text-blue-200">cheetah</td>
                            <td class="py-4 px-6 text-blue-200">SleepOS, AOSP, LineageOS</td>
                            <td class="py-4 px-6 text-blue-200">John D.</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-green-800 text-green-200 text-sm">Active</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="text-blue-300 hover:text-blue-100">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">OnePlus 11</td>
                            <td class="py-4 px-6 text-blue-200">marble</td>
                            <td class="py-4 px-6 text-blue-200">AOSP, PE</td>
                            <td class="py-4 px-6 text-blue-200">Alice S.</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-green-800 text-green-200 text-sm">Active</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="text-blue-300 hover:text-blue-100">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Samsung Galaxy S23</td>
                            <td class="py-4 px-6 text-blue-200">dm2q</td>
                            <td class="py-4 px-6 text-blue-200">LineageOS, PE</td>
                            <td class="py-4 px-6 text-blue-200">Maria R.</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">Beta</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="text-blue-300 hover:text-blue-100">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Add Device Modal -->
<div id="add-device-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-blue-800 rounded-lg max-w-lg w-full max-h-96 overflow-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-white">Add New Device</h3>
                <button id="close-device-modal" class="text-blue-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form id="device-form" class="space-y-4">
                <div>
                    <label for="device-name" class="block text-blue-200 mb-2">Device Name</label>
                    <input type="text" id="device-name" name="name" required class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="device-codename" class="block text-blue-200 mb-2">Device Codename</label>
                    <input type="text" id="device-codename" name="codename" required class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="device-roms" class="block text-blue-200 mb-2">Supported ROM Types</label>
                    <select multiple id="device-roms" name="roms[]" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="sleepos">SleepOS</option>
                        <option value="aosp">AOSP</option>
                        <option value="pe">Pixel Experience</option>
                        <option value="lineageos">LineageOS</option>
                        <option value="crdroid">CrDroid</option>
                    </select>
                </div>
                
                <div class="text-right">
                    <button type="submit" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                        Add Device
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addDeviceBtn = document.getElementById('add-device-btn');
    const modal = document.getElementById('add-device-modal');
    const closeModal = document.getElementById('close-device-modal');
    const deviceForm = document.getElementById('device-form');
    
    // Open modal
    addDeviceBtn.addEventListener('click', function() {
        modal.classList.remove('hidden');
    });
    
    // Close modal
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
    
    // Form submission
    deviceForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // In a real implementation, this would send data to the backend
        alert('Device added successfully!');
        
        // Reset form and close modal
        deviceForm.reset();
        modal.classList.add('hidden');
    });
});
</script>
@endsection