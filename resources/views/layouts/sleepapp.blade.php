<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Project Sleep')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root {
            /* Dark theme colors */
            --dark-bg-primary: #0a192f;
            --dark-bg-secondary: #112240;
            --dark-text-primary: #ccd6f6;
            --dark-text-secondary: #8892b0;
            --dark-accent: #64ffda;
            --dark-accent-hover: #57cbd9;
            
            /* Light theme colors */
            --light-bg-primary: #e6f7ff;
            --light-bg-secondary: #b3e0ff;
            --light-text-primary: #0a192f;
            --light-text-secondary: #112240;
            --light-accent: #0080a0;
            --light-accent-hover: #006680;
        }
        
        body.dark {
            background-color: var(--dark-bg-primary);
            color: var(--dark-text-primary);
        }
        
        body.light {
            background-color: var(--light-bg-primary);
            color: var(--light-text-primary);
        }
        
        .dark .card {
            background-color: var(--dark-bg-secondary);
            color: var(--dark-text-primary);
        }
        
        .light .card {
            background-color: white;
            color: var(--light-text-primary);
        }
        
        .dark .btn-primary {
            background-color: var(--dark-accent);
            color: var(--dark-bg-primary);
        }
        
        .light .btn-primary {
            background-color: var(--light-accent);
            color: white;
        }
        
        .dark .btn-primary:hover {
            background-color: var(--dark-accent-hover);
        }
        
        .light .btn-primary:hover {
            background-color: var(--light-accent-hover);
        }
    </style>
</head>
<body class="font-sans antialiased dark">
    <div id="app" class="min-h-screen">
        <!-- Navigation -->
        <nav class="fixed top-0 w-full bg-transparent z-50 backdrop-blur-md transition-all duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center">
                            <span class="text-xl font-bold text-blue-400">Project Sleep</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-8">
                        <a href="{{ route('home') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Home</a>
                        <a href="{{ route('features') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Features</a>
                        <a href="{{ route('download') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Download</a>
                        <a href="{{ route('team') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Team</a>
                        <a href="{{ route('about') }}" class="text-blue-300 hover:text-blue-100 transition-colors">About</a>
                        
                        <!-- Dark/Light mode toggle -->
                        <button id="theme-toggle" class="p-2 rounded-full bg-blue-800 text-blue-100 hover:bg-blue-700">
                            <svg id="sun-icon" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                            </svg>
                            <svg id="moon-icon" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-toggle" class="p-2 rounded-md text-blue-300 hover:text-blue-100">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden absolute top-16 left-0 right-0 bg-blue-900 bg-opacity-95 z-40">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-300 hover:text-blue-100 hover:bg-blue-800">Home</a>
                <a href="{{ route('features') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-300 hover:text-blue-100 hover:bg-blue-800">Features</a>
                <a href="{{ route('download') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-300 hover:text-blue-100 hover:bg-blue-800">Download</a>
                <a href="{{ route('team') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-300 hover:text-blue-100 hover:bg-blue-800">Team</a>
                <a href="{{ route('about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-blue-300 hover:text-blue-100 hover:bg-blue-800">About</a>
                
                <!-- Dark/Light mode toggle in mobile -->
                <div class="px-3 py-2">
                    <button id="theme-toggle-mobile" class="p-2 rounded-full bg-blue-800 text-blue-100 hover:bg-blue-700">
                        <svg id="sun-icon-mobile" class="w-5 h-5 hidden" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg id="moon-icon-mobile" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <main class="pt-16">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-blue-900 text-blue-200 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Project Sleep</h3>
                        <p class="text-sm">Custom Android ROMs for your devices. Providing SleepOS, AOSP, and Port ROMs.</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Community</h3>
                        <ul class="space-y-2">
                            <li><a href="https://t.me/SleepOsUpdate" target="_blank" class="text-blue-300 hover:text-blue-100 transition-colors">Telegram Channel</a></li>
                            <li><a href="https://t.me/SleepOsUser" target="_blank" class="text-blue-300 hover:text-blue-100 transition-colors">Telegram Group</a></li>
                            <li><a href="https://discord.gg/sK433E4jq" target="_blank" class="text-blue-300 hover:text-blue-100 transition-colors">Discord</a></li>
                            <li><a href="https://github.com/sleep-bugy" target="_blank" class="text-blue-300 hover:text-blue-100 transition-colors">GitHub</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Home</a></li>
                            <li><a href="{{ route('features') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Features</a></li>
                            <li><a href="{{ route('download') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Download</a></li>
                            <li><a href="{{ route('team') }}" class="text-blue-300 hover:text-blue-100 transition-colors">Team</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Language</h3>
                        <div class="flex space-x-2">
                            <button class="lang-btn text-blue-300 hover:text-blue-100" data-lang="en">EN</button>
                            <button class="lang-btn text-blue-300 hover:text-blue-100" data-lang="id">ID</button>
                            <button class="lang-btn text-blue-300 hover:text-blue-100" data-lang="es">ES</button>
                            <button class="lang-btn text-blue-300 hover:text-blue-100" data-lang="de">DE</button>
                        </div>
                    </div>
                </div>
                <div class="mt-8 pt-8 border-t border-blue-800 text-center">
                    <p>&copy; {{ date('Y') }} Project Sleep. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Theme toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeToggleMobile = document.getElementById('theme-toggle-mobile');
            const sunIcon = document.getElementById('sun-icon');
            const moonIcon = document.getElementById('moon-icon');
            const sunIconMobile = document.getElementById('sun-icon-mobile');
            const moonIconMobile = document.getElementById('moon-icon-mobile');

            // Check for saved theme preference or default to 'dark'
            const savedTheme = localStorage.getItem('theme') || 'dark';
            document.body.className = savedTheme;

            updateThemeIcons(savedTheme === 'dark');

            function updateThemeIcons(isDark) {
                if (isDark) {
                    sunIcon.classList.add('hidden');
                    moonIcon.classList.remove('hidden');
                    sunIconMobile.classList.add('hidden');
                    moonIconMobile.classList.remove('hidden');
                } else {
                    sunIcon.classList.remove('hidden');
                    moonIcon.classList.add('hidden');
                    sunIconMobile.classList.remove('hidden');
                    moonIconMobile.classList.add('hidden');
                }
            }

            function toggleTheme() {
                const isDark = document.body.classList.contains('dark');
                const newTheme = isDark ? 'light' : 'dark';

                document.body.className = newTheme;
                localStorage.setItem('theme', newTheme);
                updateThemeIcons(!isDark);
            }

            themeToggle.addEventListener('click', toggleTheme);
            themeToggleMobile.addEventListener('click', toggleTheme);

            // Mobile menu toggle
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');

            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                const isClickInsideNav = document.querySelector('nav').contains(event.target);
                const isClickInsideMenu = mobileMenu.contains(event.target);

                if (!isClickInsideNav && !isClickInsideMenu) {
                    mobileMenu.classList.add('hidden');
                }
            });

            // Language switch functionality
            const langButtons = document.querySelectorAll('.lang-btn');
            langButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const lang = this.getAttribute('data-lang');
                    window.location.href = `/language/${lang}`;
                });
            });
        });
    </script>
</body>
</html>