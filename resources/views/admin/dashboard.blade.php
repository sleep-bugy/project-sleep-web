@extends('layouts.sleepapp')

@section('title', 'Admin Dashboard - Project Sleep')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Admin Dashboard</h1>
        <p class="text-xl text-blue-200">
            Manage Project Sleep content, devices, ROMs, and applications
        </p>
    </div>
</section>

<!-- Quick Stats -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="card p-6 rounded-xl">
                <div class="flex items-center">
                    <div class="text-blue-400 mr-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white">125</p>
                        <p class="text-blue-200">Devices</p>
                    </div>
                </div>
            </div>
            
            <div class="card p-6 rounded-xl">
                <div class="flex items-center">
                    <div class="text-blue-400 mr-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white">342</p>
                        <p class="text-blue-200">ROMs</p>
                    </div>
                </div>
            </div>
            
            <div class="card p-6 rounded-xl">
                <div class="flex items-center">
                    <div class="text-blue-400 mr-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white">28</p>
                        <p class="text-blue-200">Team Apps</p>
                    </div>
                </div>
            </div>
            
            <div class="card p-6 rounded-xl">
                <div class="flex items-center">
                    <div class="text-blue-400 mr-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-white">42</p>
                        <p class="text-blue-200">Content Pages</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="py-12 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-white mb-6">Quick Actions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="{{ route('admin.devices') }}" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Manage Devices</h3>
                    <p class="text-blue-200">Add, edit, or remove device entries</p>
                </div>
            </a>
            
            <a href="{{ route('admin.roms') }}" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Manage ROMs</h3>
                    <p class="text-blue-200">Upload and manage ROMs for devices</p>
                </div>
            </a>
            
            <a href="{{ route('admin.content') }}" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Content Management</h3>
                    <p class="text-blue-200">Edit website content and pages</p>
                </div>
            </a>
            
            <a href="{{ route('admin.applications') }}" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Team Applications</h3>
                    <p class="text-blue-200">Review and manage team applications</p>
                </div>
            </a>
            
            <a href="{{ route('admin.languages') }}" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">Language Management</h3>
                    <p class="text-blue-200">Manage multi-language translations</p>
                </div>
            </a>
            
            <a href="#" class="card p-6 rounded-xl flex items-center hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mr-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-white">System Status</h3>
                    <p class="text-blue-200">Check system health and performance</p>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Recent Activity -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-white mb-6">Recent Activity</h2>
        <div class="card rounded-xl overflow-hidden">
            <ul class="divide-y divide-blue-800">
                <li class="p-4">
                    <div class="flex items-start">
                        <div class="text-blue-400 mr-3 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200">Added new device support for Google Pixel 8</p>
                            <p class="text-blue-400 text-sm">2 hours ago</p>
                        </div>
                    </div>
                </li>
                <li class="p-4">
                    <div class="flex items-start">
                        <div class="text-blue-400 mr-3 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200">Updated SleepOS v2.5 with performance improvements</p>
                            <p class="text-blue-400 text-sm">5 hours ago</p>
                        </div>
                    </div>
                </li>
                <li class="p-4">
                    <div class="flex items-start">
                        <div class="text-blue-400 mr-3 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200">Published new community guidelines</p>
                            <p class="text-blue-400 text-sm">1 day ago</p>
                        </div>
                    </div>
                </li>
                <li class="p-4">
                    <div class="flex items-start">
                        <div class="text-blue-400 mr-3 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200">Added French translation for website content</p>
                            <p class="text-blue-400 text-sm">2 days ago</p>
                        </div>
                    </div>
                </li>
                <li class="p-4">
                    <div class="flex items-start">
                        <div class="text-blue-400 mr-3 mt-1">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-blue-200">New team member application received</p>
                            <p class="text-blue-400 text-sm">3 days ago</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection