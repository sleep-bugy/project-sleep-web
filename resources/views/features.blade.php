@extends('layouts.sleepapp')

@section('title', __('features.title'))

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ __('features.hero_title') }}</h1>
        <p class="text-xl text-blue-200 max-w-3xl mx-auto">
            {{ __('features.hero_description') }}
        </p>
    </div>
</section>

<!-- Screenshot Gallery Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Feature Gallery</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Visual showcase of our ROM features with screenshots
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Custom+Home+Screen" alt="Custom Home Screen" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Custom Home Screen</h3>
                    <p class="text-blue-200 text-sm">Extensive customization options for your home screen experience</p>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Advanced+Settings" alt="Advanced Settings" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Advanced Settings</h3>
                    <p class="text-blue-200 text-sm">Granular controls for performance, battery, and privacy settings</p>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Gesture+Controls" alt="Gesture Controls" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Gesture Controls</h3>
                    <p class="text-blue-200 text-sm">Intuitive navigation with customizable gesture controls</p>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Theming+Options" alt="Theming Options" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Theming Options</h3>
                    <p class="text-blue-200 text-sm">Dark, light, and custom themes with material design elements</p>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Performance+Tweaks" alt="Performance Tweaks" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Performance Tweaks</h3>
                    <p class="text-blue-200 text-sm">Kernel-level optimizations for maximum performance</p>
                </div>
            </div>
            
            <div class="card overflow-hidden rounded-xl">
                <img src="https://placehold.co/400x225/0a192f/64ffda?text=Privacy+Features" alt="Privacy Features" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-bold text-white">Privacy Features</h3>
                    <p class="text-blue-200 text-sm">Advanced privacy controls and app permissions management</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Specifications Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Technical Specifications</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Deep dive into the technical aspects of our ROMs
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <h3 class="text-2xl font-bold text-white mb-6">SleepOS (HyperOS)</h3>
                <div class="space-y-4">
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Base</h4>
                        <p class="text-blue-200">Android 14 with HyperOS-inspired UI elements</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Kernel</h4>
                        <p class="text-blue-200">Custom kernel with performance and battery optimizations</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Features</h4>
                        <p class="text-blue-200">Exclusive SleepOS features, enhanced animations, custom theming</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Updates</h4>
                        <p class="text-blue-200">Monthly feature updates, weekly security patches</p>
                    </div>
                </div>
            </div>
            
            <div>
                <h3 class="text-2xl font-bold text-white mb-6">AOSP</h3>
                <div class="space-y-4">
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Base</h4>
                        <p class="text-blue-200">Clean Android 14 Open Source Project</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Kernel</h4>
                        <p class="text-blue-200">Stable kernel with minimal modifications for maximum compatibility</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Features</h4>
                        <p class="text-blue-200">Stock Android experience with essential customizations</p>
                    </div>
                    
                    <div class="card p-4 rounded-lg">
                        <h4 class="font-bold text-blue-300">Updates</h4>
                        <p class="text-blue-200">Regular security updates, quarterly feature releases</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-12">
            <h3 class="text-2xl font-bold text-white mb-6">Port ROMs</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="card p-6 rounded-lg">
                    <h4 class="font-bold text-blue-300 text-xl mb-3">Pixel Experience</h4>
                    <p class="text-blue-200 mb-3">Google Pixel experience with stock Android feel and Pixel-exclusive features</p>
                    <ul class="text-blue-200 space-y-1">
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Google Pixel camera app</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Material You design</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Adaptive battery</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Live wallpapers</li>
                    </ul>
                </div>
                
                <div class="card p-6 rounded-lg">
                    <h4 class="font-bold text-blue-300 text-xl mb-3">LineageOS</h4>
                    <p class="text-blue-200 mb-3">Open-source Android distribution with enhanced privacy and security</p>
                    <ul class="text-blue-200 space-y-1">
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> No Google apps by default</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Enhanced privacy controls</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Long-term support</li>
                        <li class="flex items-center"><span class="text-blue-400 mr-2">•</span> Custom recovery support</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comparison Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">OS Comparison</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Compare features between our different ROM offerings
            </p>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-blue-900/20 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-blue-800">
                        <th class="py-3 px-4 text-left text-white">Feature</th>
                        <th class="py-3 px-4 text-center text-blue-300">SleepOS</th>
                        <th class="py-3 px-4 text-center text-blue-300">AOSP</th>
                        <th class="py-3 px-4 text-center text-blue-300">Port ROMs</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-blue-800">
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Interface</td>
                        <td class="py-3 px-4 text-center text-blue-200">HyperOS-inspired</td>
                        <td class="py-3 px-4 text-center text-blue-200">Stock Android</td>
                        <td class="py-3 px-4 text-center text-blue-200">Varies by ROM</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Performance</td>
                        <td class="py-3 px-4 text-center text-blue-200 font-medium">High</td>
                        <td class="py-3 px-4 text-center text-blue-200">Medium</td>
                        <td class="py-3 px-4 text-center text-blue-200">Medium-High</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Customization</td>
                        <td class="py-3 px-4 text-center text-blue-200 font-medium">Extensive</td>
                        <td class="py-3 px-4 text-center text-blue-200">Basic</td>
                        <td class="py-3 px-4 text-center text-blue-200">High</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Battery Optimization</td>
                        <td class="py-3 px-4 text-center text-blue-200 font-medium">Advanced</td>
                        <td class="py-3 px-4 text-center text-blue-200">Standard</td>
                        <td class="py-3 px-4 text-center text-blue-200">Varies</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Update Frequency</td>
                        <td class="py-3 px-4 text-center text-blue-200">Monthly</td>
                        <td class="py-3 px-4 text-center text-blue-200">Quarterly</td>
                        <td class="py-3 px-4 text-center text-blue-200">Varies</td>
                    </tr>
                    <tr>
                        <td class="py-3 px-4 text-blue-200">Stability</td>
                        <td class="py-3 px-4 text-center text-blue-200">High</td>
                        <td class="py-3 px-4 text-center text-blue-200 font-medium">Very High</td>
                        <td class="py-3 px-4 text-center text-blue-200">High</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Animation Showcase Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-16">Smooth Animations</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card p-8 rounded-xl" id="animation-card-1">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Transition Effects</h3>
                <p class="text-blue-200">
                    Smooth transitions between applications and system UI elements
                </p>
            </div>
            
            <div class="card p-8 rounded-xl" id="animation-card-2">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Interactive UI</h3>
                <p class="text-blue-200">
                    Responsive and interactive user interface with tactile feedback
                </p>
            </div>
            
            <div class="card p-8 rounded-xl" id="animation-card-3">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Visual Polish</h3>
                <p class="text-blue-200">
                    Carefully crafted animations that enhance the user experience
                </p>
            </div>
        </div>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation for feature cards
            const options = {
                threshold: 0.1
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, options);
            
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</section>
@endsection