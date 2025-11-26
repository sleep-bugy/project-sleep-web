@extends('layouts.sleepapp')

@section('title', 'Welcome - Project Sleep')

@section('content')
<!-- Hero Section -->
<section class="relative py-20 md:py-32 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
                <span class="block text-blue-400">Project Sleep</span>
                <span class="block text-white text-xl md:text-2xl mt-2">Custom Android ROMs for Your Device</span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-200">
                Experience the perfect blend of performance, customization, and stability with our custom Android ROMs.
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="{{ route('download') }}" class="btn-primary px-8 py-3 rounded-md text-lg font-medium transition-colors">
                    Download Now
                </a>
                <a href="{{ route('features') }}" class="px-8 py-3 rounded-md text-lg font-medium bg-blue-800 text-blue-100 hover:bg-blue-700 transition-colors">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Quick Info Section -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Welcome to Project Sleep</h2>
        <p class="text-xl text-blue-200 mb-10">
            We're a community of developers creating custom Android ROMs to enhance your device experience.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Multiple ROM Types</h3>
                <p class="text-blue-200">
                    Choose from SleepOS, AOSP, and Port ROMs tailored to your needs
                </p>
            </div>
            
            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Performance Focused</h3>
                <p class="text-blue-200">
                    Optimized for speed, battery life, and smooth user experience
                </p>
            </div>
            
            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Active Community</h3>
                <p class="text-blue-200">
                    Join thousands of users and contribute to the project
                </p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            Ready to Experience Project Sleep?
        </h2>
        <p class="text-xl text-blue-200 mb-10">
            Join thousands of users enjoying our custom Android ROMs for their devices.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="{{ route('download') }}" class="btn-primary px-8 py-4 rounded-md text-lg font-medium inline-block transition-colors">
                Browse Devices
            </a>
            <a href="{{ route('about') }}" class="px-8 py-4 rounded-md text-lg font-medium bg-blue-800 text-blue-100 hover:bg-blue-700 transition-colors inline-block">
                Learn About Us
            </a>
        </div>
    </div>
</section>
@endsection