@use('Illuminate\Support\Str')
@extends('layouts.sleepapp')

@section('title', isset($deviceModel) ? $deviceModel->name . ' - Project Sleep Downloads' : 'Device - Project Sleep Downloads')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row items-center">
            <div class="md:w-1/3 mb-8 md:mb-0 flex justify-center">
                <img src="{{ $deviceModel->image_url ?: 'https://placehold.co/300x300/0a192f/64ffda?text=' . urlencode(strlen($deviceModel->name ?? 'Device') > 15 ? substr($deviceModel->name ?? 'Device', 0, 15) . '...' : ($deviceModel->name ?? 'Device')) }}"
                     alt="{{ $deviceModel->name ?? 'Device' }}"
                     class="rounded-xl shadow-lg w-full max-w-xs object-cover h-64">
            </div>
            <div class="md:w-2/3 md:pl-12 text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $deviceModel->name ?? 'Device Name' }}</h1>
                <p class="text-xl text-blue-200 mb-6">
                    Specifications:
                    @if($deviceModel && $deviceModel->specs)
                        @if(isset($deviceModel->specs['cpu'])){{ $deviceModel->specs['cpu'] }}, @endif
                        @if(isset($deviceModel->specs['ram'])){{ $deviceModel->specs['ram'] }}, @endif
                        @if(isset($deviceModel->specs['storage'])){{ $deviceModel->specs['storage'] }}@endif
                    @else
                        8GB RAM, 256GB Storage, Snapdragon 8 Gen 2
                    @endif
                </p>
                <div class="flex flex-wrap gap-2 justify-center md:justify-start">
                    @if($roms)
                        @forelse($roms->pluck('type')->unique() as $type)
                            <span class="px-4 py-2 rounded-full bg-blue-800 text-blue-200">{{ $type }}</span>
                        @empty
                            <span class="px-4 py-2 rounded-full bg-gray-800 text-gray-400">No ROMs available yet</span>
                        @endforelse
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Available ROMs Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Available ROMs</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Select a ROM to download for your device
            </p>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-blue-900/20 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-blue-800">
                        <th class="py-4 px-6 text-left text-white">ROM Name</th>
                        <th class="py-4 px-6 text-left text-white">Maintainer</th>
                        <th class="py-4 px-6 text-left text-white">Version</th>
                        <th class="py-4 px-6 text-left text-white">Type</th>
                        <th class="py-4 px-6 text-left text-white">Size</th>
                        <th class="py-4 px-6 text-left text-white">Changelog</th>
                        <th class="py-4 px-6 text-left text-white">Notes</th>
                        <th class="py-4 px-6 text-left text-white">Download</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-blue-800">
                    @if($roms && $roms->count() > 0)
                        @foreach($roms as $rom)
                        <tr class="hover:bg-blue-800/30">
                            <td class="py-4 px-6 text-blue-200 font-medium">{{ $rom->name }}</td>
                            <td class="py-4 px-6 text-blue-200">{{ $rom->maintainer }}</td>
                            <td class="py-4 px-6 text-blue-200">{{ $rom->version }}</td>
                            <td class="py-4 px-6 text-blue-200">{{ $rom->type }}</td>
                            <td class="py-4 px-6 text-blue-200">{{ $rom->file_size }}</td>
                            <td class="py-4 px-6">
                                <button class="changelog-btn text-blue-300 hover:text-blue-100" data-changelog="{{ implode(', ', json_decode($rom->changelog, true) ?: []) }}">View</button>
                            </td>
                            <td class="py-4 px-6 text-blue-200">{{ Str::limit($rom->notes, 50) }}</td>
                            <td class="py-4 px-6">
                                <a href="{{ $rom->download_url }}"
                                   class="px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors inline-block"
                                   target="_blank" rel="noopener noreferrer">
                                    Download
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8" class="py-8 px-6 text-center text-blue-200">
                                No ROMs available for this device yet.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Installation Guide Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Installation Guide</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Follow these steps to install the ROM on your device
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="card p-6 rounded-lg">
                <div class="flex items-start mb-4">
                    <div class="bg-blue-700 text-blue-100 rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">1</div>
                    <h3 class="text-xl font-bold text-white">Backup Your Data</h3>
                </div>
                <p class="text-blue-200 ml-12">
                    Before installing a new ROM, back up all important data to avoid any loss during the process.
                </p>
            </div>
            
            <div class="card p-6 rounded-lg">
                <div class="flex items-start mb-4">
                    <div class="bg-blue-700 text-blue-100 rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">2</div>
                    <h3 class="text-xl font-bold text-white">Unlock Bootloader</h3>
                </div>
                <p class="text-blue-200 ml-12">
                    Enable OEM unlocking in Developer Options and unlock your device's bootloader using fastboot.
                </p>
            </div>
            
            <div class="card p-6 rounded-lg">
                <div class="flex items-start mb-4">
                    <div class="bg-blue-700 text-blue-100 rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">3</div>
                    <h3 class="text-xl font-bold text-white">Install Custom Recovery</h3>
                </div>
                <p class="text-blue-200 ml-12">
                    Flash a custom recovery like TWRP using fastboot to allow ROM installation.
                </p>
            </div>
            
            <div class="card p-6 rounded-lg">
                <div class="flex items-start mb-4">
                    <div class="bg-blue-700 text-blue-100 rounded-full w-8 h-8 flex items-center justify-center mr-4 flex-shrink-0">4</div>
                    <h3 class="text-xl font-bold text-white">Flash the ROM</h3>
                </div>
                <p class="text-blue-200 ml-12">
                    Boot into recovery, wipe data/factory reset, then flash the ROM zip file and any required GApps.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Changelog Modal -->
<div id="changelog-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-blue-800 rounded-lg max-w-lg w-full max-h-96 overflow-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-white">Changelog</h3>
                <button id="close-modal" class="text-blue-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="changelog-content" class="text-blue-200"></div>
            <div class="mt-6 text-right">
                <button id="close-modal-bottom" class="px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const changelogButtons = document.querySelectorAll('.changelog-btn');
    const modal = document.getElementById('changelog-modal');
    const changelogContent = document.getElementById('changelog-content');
    const closeModal = document.getElementById('close-modal');
    const closeModalBottom = document.getElementById('close-modal-bottom');
    
    // Open changelog modal
    changelogButtons.forEach(button => {
        button.addEventListener('click', function() {
            const changelog = this.getAttribute('data-changelog');
            changelogContent.textContent = changelog;
            modal.classList.remove('hidden');
        });
    });
    
    // Close modal
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
    
    closeModalBottom.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
});
</script>
@endsection