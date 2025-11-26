@extends('layouts.sleepapp')

@section('title', __('home.title'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 md:py-32 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-6">
                <span class="block text-blue-400">{{ __('home.hero_tagline') }}</span>
                <span class="block text-white text-xl md:text-2xl mt-2">{{ __('home.hero_subtitle') }}</span>
            </h1>
            <p class="mt-6 max-w-2xl mx-auto text-xl text-blue-200">
                {{ __('home.hero_description') }}
            </p>
            <div class="mt-10 flex justify-center gap-4">
                <a href="{{ route('download') }}" class="btn-primary px-8 py-3 rounded-md text-lg font-medium transition-colors">
                    {{ __('home.hero_cta_download') }}
                </a>
                <a href="{{ route('features') }}" class="px-8 py-3 rounded-md text-lg font-medium bg-blue-800 text-blue-100 hover:bg-blue-700 transition-colors">
                    {{ __('home.hero_cta_learn_more') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- OS Preview Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ __('home.os_title') }}</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                {{ __('home.os_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- SleepOS (HyperOS) Card -->
            <div class="card p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105">
                <div class="text-center">
                    <div class="bg-blue-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-300 mb-4">{{ __('home.sleepos_title') }}</h3>
                    <p class="text-blue-200 mb-6">
                        {{ __('home.sleepos_description') }}
                    </p>
                    <ul class="text-left space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Enhanced performance</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Exclusive Sleep features</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Regular updates</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Optimized battery life</li>
                    </ul>
                    <a href="{{ route('download') }}" class="inline-block px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                        Download
                    </a>
                </div>
            </div>

            <!-- AOSP Card -->
            <div class="card p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105">
                <div class="text-center">
                    <div class="bg-blue-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-300 mb-4">{{ __('home.aosp_title') }}</h3>
                    <p class="text-blue-200 mb-6">
                        {{ __('home.aosp_description') }}
                    </p>
                    <ul class="text-left space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Stock Android experience</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Maximum stability</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Security updates</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Minimal bloatware</li>
                    </ul>
                    <a href="{{ route('download') }}" class="inline-block px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                        Download
                    </a>
                </div>
            </div>

            <!-- Port ROM Card -->
            <div class="card p-8 rounded-xl shadow-lg transform transition-transform hover:scale-105">
                <div class="text-center">
                    <div class="bg-blue-800 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-300 mb-4">{{ __('home.port_title') }}</h3>
                    <p class="text-blue-200 mb-6">
                        {{ __('home.port_description') }}
                    </p>
                    <ul class="text-left space-y-2 mb-6">
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Wide device support</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Familiar interfaces</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Feature-rich options</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">✓</span> Active development</li>
                    </ul>
                    <a href="{{ route('download') }}" class="inline-block px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                        Download
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ __('home.features_title') }}</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                {{ __('home.features_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Enhanced Performance</h3>
                <p class="text-blue-200">
                    Optimized kernel and system services for faster app launches and smoother interactions.
                </p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Privacy & Security</h3>
                <p class="text-blue-200">
                    Advanced privacy controls and security patches to keep your data safe.
                </p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Customization</h3>
                <p class="text-blue-200">
                    Extensive theming options, icon packs, and interface customizations.
                </p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Battery Optimization</h3>
                <p class="text-blue-200">
                    Intelligent power management to extend battery life throughout the day.
                </p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Regular Updates</h3>
                <p class="text-blue-200">
                    Consistent monthly updates with new features, bug fixes, and security patches.
                </p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Stable & Reliable</h3>
                <p class="text-blue-200">
                    Rigorously tested builds to ensure stability and reliability for daily use.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Latest News/Updates Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">{{ __('home.news_title') }}</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                {{ __('home.news_description') }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">SleepOS v2.5 Released</h3>
                <p class="text-blue-200 text-sm mb-4">Latest version with performance improvements and new customization options.</p>
                <p class="text-blue-400 text-xs">Posted: Nov 20, 2025</p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">New Device Support</h3>
                <p class="text-blue-200 text-sm mb-4">Added support for 3 new devices with optimized builds for better performance.</p>
                <p class="text-blue-400 text-xs">Posted: Nov 15, 2025</p>
            </div>

            <div class="card p-6 rounded-lg">
                <div class="text-blue-400 mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Community Milestone</h3>
                <p class="text-blue-200 text-sm mb-4">Project Sleep community has reached 50,000 members across all platforms!</p>
                <p class="text-blue-400 text-xs">Posted: Nov 10, 2025</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
            {{ __('home.cta_title') }}
        </h2>
        <p class="text-xl text-blue-200 mb-10">
            {{ __('home.cta_description') }}
        </p>
        <a href="{{ route('download') }}" class="btn-primary px-10 py-4 rounded-md text-lg font-medium inline-block transition-colors">
            {{ __('home.hero_cta_download') }}
        </a>
    </div>
</section>
@endsection