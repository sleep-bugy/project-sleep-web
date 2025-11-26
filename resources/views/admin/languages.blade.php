@extends('layouts.sleepapp')

@section('title', 'Admin - Language Management')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Language Management</h1>
        <p class="text-xl text-blue-200">
            Manage translations for all supported languages
        </p>
    </div>
</section>

<!-- Language Management Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-white">Supported Languages</h2>
            <button id="add-language-btn" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                Add Language
            </button>
        </div>
        
        <div class="card rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-blue-800">
                        <tr>
                            <th class="py-3 px-6 text-left text-white">Language</th>
                            <th class="py-3 px-6 text-left text-white">Code</th>
                            <th class="py-3 px-6 text-left text-white">Progress</th>
                            <th class="py-3 px-6 text-left text-white">Last Updated</th>
                            <th class="py-3 px-6 text-left text-white">Status</th>
                            <th class="py-3 px-6 text-left text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-800">
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">English</td>
                            <td class="py-4 px-6 text-blue-200">en</td>
                            <td class="py-4 px-6">
                                <div class="w-full bg-blue-700 rounded-full h-2.5">
                                    <div class="bg-green-500 h-2.5 rounded-full" style="width: 100%"></div>
                                </div>
                                <span class="text-sm text-blue-200">100%</span>
                            </td>
                            <td class="py-4 px-6 text-blue-200">2025-11-20</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-green-800 text-green-200 text-sm">Complete</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="text-blue-300 hover:text-blue-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Indonesian</td>
                            <td class="py-4 px-6 text-blue-200">id</td>
                            <td class="py-4 px-6">
                                <div class="w-full bg-blue-700 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 85%"></div>
                                </div>
                                <span class="text-sm text-blue-200">85%</span>
                            </td>
                            <td class="py-4 px-6 text-blue-200">2025-11-18</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">In Progress</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="text-blue-300 hover:text-blue-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Spanish</td>
                            <td class="py-4 px-6 text-blue-200">es</td>
                            <td class="py-4 px-6">
                                <div class="w-full bg-blue-700 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 70%"></div>
                                </div>
                                <span class="text-sm text-blue-200">70%</span>
                            </td>
                            <td class="py-4 px-6 text-blue-200">2025-11-15</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">In Progress</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="text-blue-300 hover:text-blue-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">German</td>
                            <td class="py-4 px-6 text-blue-200">de</td>
                            <td class="py-4 px-6">
                                <div class="w-full bg-blue-700 rounded-full h-2.5">
                                    <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 60%"></div>
                                </div>
                                <span class="text-sm text-blue-200">60%</span>
                            </td>
                            <td class="py-4 px-6 text-blue-200">2025-11-10</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">In Progress</span>
                            </td>
                            <td class="py-4 px-6">
                                <button class="text-blue-300 hover:text-blue-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Translation Editor Section -->
<section class="py-12 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold text-white mb-6">Translation Editor</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <div>
                <label for="language-select" class="block text-blue-200 mb-2">Select Language</label>
                <select id="language-select" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="en">English (en) - Complete</option>
                    <option value="id">Indonesian (id) - 85%</option>
                    <option value="es">Spanish (es) - 70%</option>
                    <option value="de">German (de) - 60%</option>
                    <option value="fr">French (fr) - 45%</option>
                    <option value="it">Italian (it) - 40%</option>
                    <option value="pt">Portuguese (pt) - 35%</option>
                    <option value="ru">Russian (ru) - 30%</option>
                    <option value="zh">Chinese (zh) - 25%</option>
                </select>
            </div>
            
            <div>
                <label for="page-select" class="block text-blue-200 mb-2">Select Page</label>
                <select id="page-select" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="home">Home Page</option>
                    <option value="features">Features Page</option>
                    <option value="download">Download Page</option>
                    <option value="team">Team Page</option>
                    <option value="about">About Page</option>
                </select>
            </div>
        </div>
        
        <div class="card rounded-xl p-6">
            <h3 class="text-xl font-bold text-white mb-4">Translate Content</h3>
            
            <div class="space-y-6">
                <div>
                    <label class="block text-blue-200 mb-2">English (Original)</label>
                    <div class="bg-blue-900 p-4 rounded-lg text-blue-100">Project Sleep - Custom Android ROMs</div>
                </div>
                
                <div>
                    <label for="translation-input" class="block text-blue-200 mb-2">Translation (Indonesian)</label>
                    <input type="text" id="translation-input" value="Project Sleep - ROM Android Kustom" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white placeholder-blue-300 border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label class="block text-blue-200 mb-2">Text Key</label>
                    <div class="bg-blue-900 p-4 rounded-lg text-blue-100">home.page.title</div>
                </div>
            </div>
            
            <div class="mt-6 flex justify-end space-x-4">
                <button class="px-6 py-2 rounded-md bg-gray-700 text-white hover:bg-gray-600 transition-colors">
                    Preview Translation
                </button>
                <button class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                    Save Translation
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Add Language Modal -->
<div id="add-language-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-blue-800 rounded-lg max-w-lg w-full">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-bold text-white">Add New Language</h3>
                <button id="close-lang-modal" class="text-blue-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form id="language-form" class="space-y-4">
                <div>
                    <label for="lang-name" class="block text-blue-200 mb-2">Language Name</label>
                    <input type="text" id="lang-name" name="name" required class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div>
                    <label for="lang-code" class="block text-blue-200 mb-2">Language Code (ISO 639-1)</label>
                    <input type="text" id="lang-code" name="code" required class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                
                <div class="text-right">
                    <button type="submit" class="px-6 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                        Add Language
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addLanguageBtn = document.getElementById('add-language-btn');
    const modal = document.getElementById('add-language-modal');
    const closeModal = document.getElementById('close-lang-modal');
    const languageForm = document.getElementById('language-form');
    
    // Open modal
    addLanguageBtn.addEventListener('click', function() {
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
    languageForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // In a real implementation, this would send data to the backend
        alert('Language added successfully!');
        
        // Reset form and close modal
        languageForm.reset();
        modal.classList.add('hidden');
    });
    
    // Save translation
    document.querySelector('.mt-6 button:last-child').addEventListener('click', function() {
        alert('Translation saved successfully!');
    });
});
</script>
@endsection