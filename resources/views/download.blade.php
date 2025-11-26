@extends('layouts.sleepapp')

@section('title', __('download.title'))

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">{{ __('download.hero_title') }}</h1>
        <p class="text-xl text-blue-200 max-w-3xl mx-auto">
            {{ __('download.hero_description') }}
        </p>
    </div>
</section>

<!-- Search and Filter Section -->
<section class="py-12 bg-blue-900/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <form method="GET" action="{{ route('download') }}" class="flex flex-col md:flex-row gap-4 justify-between items-center">
            <div class="w-full md:w-1/3">
                <div class="relative">
                    <input
                        type="text"
                        name="search"
                        placeholder="Search devices..."
                        class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white placeholder-blue-300 border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        value="{{ $query ?? '' }}"
                    >
                    <svg class="absolute right-3 top-3.5 w-5 h-5 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>

            <div class="flex flex-wrap gap-3">
                <a href="{{ route('download') }}" class="{{ (request()->query('type', 'all') === 'all') ? 'bg-blue-700 text-blue-100' : 'bg-blue-800 text-blue-200 hover:bg-blue-700' }} px-4 py-2 rounded-md transition-colors">
                    All ROMs
                </a>
                <a href="{{ route('download', ['type' => 'SleepOS', 'search' => $query ?? '']) }}" class="{{ (request()->query('type') === 'SleepOS') ? 'bg-blue-700 text-blue-100' : 'bg-blue-800 text-blue-200 hover:bg-blue-700' }} px-4 py-2 rounded-md transition-colors">
                    SleepOS
                </a>
                <a href="{{ route('download', ['type' => 'AOSP', 'search' => $query ?? '']) }}" class="{{ (request()->query('type') === 'AOSP') ? 'bg-blue-700 text-blue-100' : 'bg-blue-800 text-blue-200 hover:bg-blue-700' }} px-4 py-2 rounded-md transition-colors">
                    AOSP
                </a>
                <a href="{{ route('download', ['type' => 'Port ROM', 'search' => $query ?? '']) }}" class="{{ (request()->query('type') === 'Port ROM') ? 'bg-blue-700 text-blue-100' : 'bg-blue-800 text-blue-200 hover:bg-blue-700' }} px-4 py-2 rounded-md transition-colors">
                    Port ROMs
                </a>
            </div>
        </form>
    </div>
</section>

<!-- Device Grid Section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="device-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            @if($devices && $devices->count() > 0)
                @foreach($devices as $device)
                    <div class="device-card card rounded-xl overflow-hidden shadow-lg transform transition-transform hover:scale-105">
                        <img src="{{ $device->image_url ?: 'https://placehold.co/300x200/0a192f/64ffda?text='.urlencode($device->name) }}"
                             alt="{{ $device->name }}"
                             class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-white mb-2">{{ $device->name }}</h3>
                            <p class="text-blue-200 text-sm mb-4">
                                @if($device->specs && isset($device->specs['cpu']))
                                    {{ $device->specs['cpu'] }}
                                @else
                                    Specs not available
                                @endif
                            </p>
                            <a href="{{ route('device.show', ['device' => $device->codename]) }}"
                               class="block w-full text-center px-4 py-2 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors">
                                View ROMs
                            </a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-span-full text-center py-12">
                    <h3 class="text-2xl font-bold text-white mb-4">No devices found</h3>
                    <p class="text-xl text-blue-200">Try adjusting your search or filter criteria</p>
                </div>
            @endif
        </div>

        <!-- Pagination -->
        @if($devices && $devices->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $devices->links() }}
            </div>
        @endif
        
        <!-- No results message -->
        <div id="no-results" class="hidden text-center py-12">
            <h3 class="text-2xl font-bold text-white mb-4">No devices found</h3>
            <p class="text-blue-200">Try adjusting your search or filter criteria</p>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const deviceCards = document.querySelectorAll('.device-card');
    const filterButtons = document.querySelectorAll('.filter-btn');
    const searchInput = document.getElementById('device-search');
    const deviceGrid = document.getElementById('device-grid');
    const noResults = document.getElementById('no-results');
    
    // Filter functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('bg-blue-700', 'text-blue-100'));
            this.classList.add('bg-blue-700', 'text-blue-100');
            
            const filterValue = this.getAttribute('data-filter');
            
            // Show/hide cards based on filter
            deviceCards.forEach(card => {
                if (filterValue === 'all' || card.getAttribute('data-type') === filterValue) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
            
            checkResults();
        });
    });
    
    // Search functionality
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        // Reset to show all cards first
        deviceCards.forEach(card => {
            if (filterButtons[0].classList.contains('bg-blue-700')) {
                // If "All ROMs" is active, show all
                card.style.display = 'block';
            } else {
                // Otherwise, respect the current filter
                const activeFilter = document.querySelector('.filter-btn.bg-blue-700').getAttribute('data-filter');
                if (activeFilter === 'all' || card.getAttribute('data-type') === activeFilter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            }
        });
        
        // Apply search filter
        if (searchTerm) {
            deviceCards.forEach(card => {
                const deviceName = card.querySelector('h3').textContent.toLowerCase();
                if (!deviceName.includes(searchTerm)) {
                    card.style.display = 'none';
                }
            });
        }
        
        checkResults();
    });
    
    // Check if any results are visible
    function checkResults() {
        let visibleCount = 0;
        deviceCards.forEach(card => {
            if (card.style.display !== 'none') {
                visibleCount++;
            }
        });
        
        if (visibleCount === 0) {
            noResults.classList.remove('hidden');
            deviceGrid.classList.add('hidden');
        } else {
            noResults.classList.add('hidden');
            deviceGrid.classList.remove('hidden');
        }
    }
    
    // Initialize
    checkResults();
});
</script>
@endsection