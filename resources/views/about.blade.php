@extends('layouts.sleepapp')

@section('title', __('about.title'))

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ __('about.hero_title') }}</h1>
        <p class="text-xl text-blue-200 max-w-3xl mx-auto">
            {{ __('about.hero_description') }}
        </p>
    </div>
</section>

<!-- Project Description Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 items-center">
            <div class="lg:w-1/2">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Our Story</h2>
                <p class="text-blue-200 mb-6">
                    Project Sleep began in 2020 as a small group of Android enthusiasts who wanted to create better custom ROM experiences for their devices. What started as a weekend hobby project has grown into a community-driven initiative with contributors from around the world.
                </p>
                <p class="text-blue-200 mb-6">
                    We believe that every Android user deserves a personalized, optimized experience on their device. Our ROMs aim to provide the perfect balance between performance, features, and stability.
                </p>
                <p class="text-blue-200">
                    Today, Project Sleep supports over 50 devices across multiple manufacturers, serving thousands of users who appreciate our attention to detail and commitment to quality.
                </p>
            </div>
            <div class="lg:w-1/2">
                <img src="https://placehold.co/600x400/0a192f/64ffda?text=Project+Sleep+Team" alt="Project Sleep Team" class="rounded-xl shadow-lg w-full">
            </div>
        </div>
    </div>
</section>

<!-- Vision and Mission Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div class="card p-8 rounded-xl">
                <h2 class="text-3xl font-bold text-white mb-6">Our Vision</h2>
                <p class="text-blue-200 text-lg mb-6">
                    To create the most advanced, user-friendly custom Android experiences that push the boundaries of what's possible on mobile devices.
                </p>
                <ul class="space-y-3 text-blue-200">
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Advance the state of custom Android development</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Provide equal access to premium Android experiences</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Foster a global community of Android enthusiasts</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Promote open source development practices</span>
                    </li>
                </ul>
            </div>
            
            <div class="card p-8 rounded-xl">
                <h2 class="text-3xl font-bold text-white mb-6">Our Mission</h2>
                <p class="text-blue-200 text-lg mb-6">
                    To deliver high-quality, feature-rich custom ROMs that enhance the Android experience while maintaining stability and security.
                </p>
                <ul class="space-y-3 text-blue-200">
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Develop ROMs with superior performance and battery life</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Provide regular updates with new features and security patches</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Support as many devices as possible with custom ROMs</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-400 mr-3 mt-1">•</span>
                        <span>Build a strong, helpful community around our projects</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Community Links Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Join Our Community</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Connect with us and thousands of other users on our community platforms
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <a href="https://t.me/SleepOsUpdate" target="_blank" class="card p-6 rounded-xl text-center transform transition-transform hover:scale-105">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.14.141-.259.259-.374.261l.213-3.053 5.56-5.022c.24-.213-.054-.334-.374-.121l-6.869 4.326-2.969-.924c-.64-.203-.658-.64.136-.954l11.77-3.646c.446-.136.799.123.632.961z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Telegram Channel</h3>
                <p class="text-blue-200">Get the latest updates and news</p>
            </a>
            
            <a href="https://t.me/SleepOsUser" target="_blank" class="card p-6 rounded-xl text-center transform transition-transform hover:scale-105">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.14.141-.259.259-.374.261l.213-3.053 5.56-5.022c.24-.213-.054-.334-.374-.121l-6.869 4.326-2.969-.924c-.64-.203-.658-.64.136-.954l11.77-3.646c.446-.136.799.123.632.961z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Telegram Group</h3>
                <p class="text-blue-200">Join discussions and get support</p>
            </a>
            
            <a href="https://discord.gg/sK433E4jq" target="_blank" class="card p-6 rounded-xl text-center transform transition-transform hover:scale-105">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.82 4.26a10.14 10.14 0 0 0-.53 1.1 14.66 14.66 0 0 0-4.58 0 10.14 10.14 0 0 0-.53-1.1 16 16 0 0 0-4.13 1.3 17.33 17.33 0 0 0-3 11.59 16.6 16.6 0 0 0 5.07 2.59A12.89 12.89 0 0 0 8.23 18a9.65 9.65 0 0 1-1.71-.83 3.39 3.39 0 0 0 .42-.33 11.66 11.66 0 0 0 10.12 0q.21.18.42.33a10.84 10.84 0 0 1-1.705.84 12.41 12.41 0 0 0 1.08 1.78 16.44 16.44 0 0 0 5.07-2.59 17.22 17.22 0 0 0-3-11.58 16.09 16.09 0 0 0-4.09-1.35zM8.68 14.81a1.94 1.94 0 0 1-1.8-2 1.93 1.93 0 0 1 1.8-2 1.93 1.93 0 0 1 1.8 2 1.93 1.93 0 0 1-1.8 2zm6.64 0a1.94 1.94 0 0 1-1.8-2 1.93 1.93 0 0 1 1.8-2 1.92 1.92 0 0 1 1.8 2 1.92 1.92 0 0 1-1.8 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Discord</h3>
                <p class="text-blue-200">Real-time chat and community</p>
            </a>
            
            <a href="https://github.com/sleep-bugy" target="_blank" class="card p-6 rounded-xl text-center transform transition-transform hover:scale-105">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">GitHub</h3>
                <p class="text-blue-200">Contribute to our open source projects</p>
            </a>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Project Timeline</h2>
            <p class="text-xl text-blue-200 max-w-3xl mx-auto">
                Key milestones in the evolution of Project Sleep
            </p>
        </div>
        
        <div class="relative">
            <!-- Vertical line -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-blue-700"></div>
            
            <div class="space-y-12">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pr-8 text-right">
                        <div class="card p-6 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-white mb-2">2020 - Project Inception</h3>
                            <p class="text-blue-200">
                                Project Sleep was founded by a group of Android enthusiasts with the initial goal of creating custom ROMs for popular devices.
                            </p>
                        </div>
                    </div>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full border-4 border-blue-900">
                        <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                    </div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full border-4 border-blue-900">
                        <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                    </div>
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pl-8">
                        <div class="card p-6 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-white mb-2">2021 - First Major Release</h3>
                            <p class="text-blue-200">
                                Launched SleepOS, our flagship ROM based on HyperOS principles with custom performance enhancements.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pr-8 text-right">
                        <div class="card p-6 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-white mb-2">2022 - Expansion</h3>
                            <p class="text-blue-200">
                                Added support for AOSP and port ROMs, expanding our device coverage to over 20 models.
                            </p>
                        </div>
                    </div>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full border-4 border-blue-900">
                        <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                    </div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
                
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 md:pr-8"></div>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full border-4 border-blue-900">
                        <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                    </div>
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pl-8">
                        <div class="card p-6 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-white mb-2">2023 - Community Growth</h3>
                            <p class="text-blue-200">
                                Reached 10,000 active users and established official community channels for support and feedback.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-4 md:mb-0 md:pr-8 text-right">
                        <div class="card p-6 rounded-xl inline-block">
                            <h3 class="text-xl font-bold text-white mb-2">2024 - Present</h3>
                            <p class="text-blue-200">
                                Continuing to expand device support with focus on Android 14 optimization and enhanced user experience.
                            </p>
                        </div>
                    </div>
                    <div class="relative z-10 flex items-center justify-center w-8 h-8 bg-blue-500 rounded-full border-4 border-blue-900">
                        <div class="w-2 h-2 bg-blue-200 rounded-full"></div>
                    </div>
                    <div class="md:w-1/2 md:pl-8"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Get in Touch</h2>
        <p class="text-xl text-blue-200 mb-10">
            Have questions or feedback? We'd love to hear from you!
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="card p-6 rounded-xl">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Email</h3>
                <p class="text-blue-200">contact@project-sleep.org</p>
            </div>
            
            <div class="card p-6 rounded-xl">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Forums</h3>
                <p class="text-blue-200">XDA Developers</p>
            </div>
            
            <div class="card p-6 rounded-xl">
                <div class="text-blue-400 mb-4 mx-auto">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Location</h3>
                <p class="text-blue-200">Global Community</p>
            </div>
        </div>
    </div>
</section>
@endsection