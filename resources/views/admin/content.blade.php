@extends('layouts.sleepapp')

@section('title', 'Admin - Content Management')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Content Management</h1>
        <p class="text-xl text-blue-200">
            Edit and manage website content and pages
        </p>
    </div>
</section>

<!-- Content Management Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-white mb-8">Manage Content Pages</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Home Page</h3>
                <p class="text-blue-200">Edit hero section, features, and download CTA</p>
            </a>
            
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Features Page</h3>
                <p class="text-blue-200">Update feature descriptions and specifications</p>
            </a>
            
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Download Page</h3>
                <p class="text-blue-200">Manage device listing and download page content</p>
            </a>
            
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Team Page</h3>
                <p class="text-blue-200">Update team member information and content</p>
            </a>
            
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">About Page</h3>
                <p class="text-blue-200">Edit project history, vision, and mission statements</p>
            </a>
            
            <a href="#" class="card p-6 rounded-xl hover:bg-blue-700 transition-colors">
                <div class="text-blue-400 mb-4">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">News & Updates</h3>
                <p class="text-blue-200">Add or edit latest news and announcements</p>
            </a>
        </div>
    </div>
</section>

<!-- Text Editor Section -->
<section class="py-12 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-white mb-6">Edit Content</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <label for="content-selector" class="block text-blue-200 mb-2">Select Content to Edit</label>
                <select id="content-selector" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="home-hero">Home Page - Hero Section</option>
                    <option value="home-features">Home Page - Features</option>
                    <option value="features-intro">Features Page - Introduction</option>
                    <option value="download-intro">Download Page - Introduction</option>
                    <option value="team-intro">Team Page - Introduction</option>
                    <option value="about-intro">About Page - Introduction</option>
                </select>
            </div>
            
            <div>
                <label for="language-selector" class="block text-blue-200 mb-2">Language</label>
                <select id="language-selector" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="en">English</option>
                    <option value="id">Indonesian</option>
                    <option value="es">Spanish</option>
                    <option value="de">German</option>
                    <option value="fr">French</option>
                    <option value="it">Italian</option>
                    <option value="pt">Portuguese</option>
                    <option value="ru">Russian</option>
                    <option value="zh">Chinese</option>
                </select>
            </div>
        </div>
        
        <div class="mt-6">
            <label for="content-editor" class="block text-blue-200 mb-2">Content Editor</label>
            <textarea id="content-editor" rows="12" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white placeholder-blue-300 border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
&lt;h2&gt;Our ROM Offerings&lt;/h2&gt;
&lt;p&gt;Choose from our three flagship ROM types designed for different user needs&lt;/p&gt;
&lt;ul&gt;
  &lt;li&gt;SleepOS: Our flagship ROM based on HyperOS with enhanced performance&lt;/li&gt;
  &lt;li&gt;AOSP: Clean, stable Android Open Source Project with minimal customization&lt;/li&gt;
  &lt;li&gt;Port ROMs: Popular ROMs ported to various devices for maximum compatibility&lt;/li&gt;
&lt;/ul&gt;
            </textarea>
        </div>
        
        <div class="mt-6 flex justify-end space-x-4">
            <button class="px-6 py-2 rounded-md bg-gray-700 text-white hover:bg-gray-600 transition-colors">
                Preview
            </button>
            <button class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                Save Changes
            </button>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contentSelector = document.getElementById('content-selector');
    const contentEditor = document.getElementById('content-editor');
    
    // Sample content for different sections
    const contentSamples = {
        'home-hero': '<h1>Project Sleep</h1><p>Custom Android ROMs for Your Device</p>',
        'home-features': '<h2>Our ROM Offerings</h2><p>Choose from our three flagship ROM types designed for different user needs</p><ul><li>SleepOS: Our flagship ROM based on HyperOS with enhanced performance</li><li>AOSP: Clean, stable Android Open Source Project with minimal customization</li><li>Port ROMs: Popular ROMs ported to various devices for maximum compatibility</li></ul>',
        'features-intro': '<h1>Features</h1><p>Explore the comprehensive features and technical specifications of our custom Android ROMs</p>',
        'download-intro': '<h1>Download</h1><p>Find and download ROMs for your device. Search or filter by type to find the perfect ROM for your needs.</p>',
        'team-intro': '<h1>Our Team</h1><p>Meet the passionate developers and contributors behind Project Sleep</p>',
        'about-intro': '<h1>About Project Sleep</h1><p>Our journey, vision, and mission in creating custom Android experiences</p>'
    };
    
    contentSelector.addEventListener('change', function() {
        const selectedContent = contentSamples[this.value];
        if (selectedContent) {
            contentEditor.value = selectedContent;
        }
    });
    
    // Save changes functionality
    document.querySelector('.mt-6 button:last-child').addEventListener('click', function() {
        alert('Content saved successfully!');
    });
});
</script>
@endsection