@extends('layouts.sleepapp')

@section('title', 'Profile - Project Sleep')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">My Profile</h1>
        <p class="text-xl text-blue-200">
            Your account information and settings
        </p>
    </div>
</section>

<!-- Profile Info Section -->
<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card rounded-xl p-8">
            @if (session('status'))
                <div class="mb-4 p-4 bg-green-800 text-green-200 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold text-white mb-4">Profile Picture</h3>
                    <div class="flex items-center">
                        <img src="/assets/images/users/{{ $user->picture }}" class="w-32 h-32 rounded-full object-cover border-2 border-blue-500" alt="Profile Picture">
                    </div>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="block text-blue-200 mb-2 font-medium">Name</label>
                        <input type="text" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                              value="{{ $user->name }}" readonly>
                    </div>
                    <div>
                        <label class="block text-blue-200 mb-2 font-medium">Username</label>
                        <input type="text" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                              value="{{ $user->username }}" readonly>
                    </div>
                    <div>
                        <label class="block text-blue-200 mb-2 font-medium">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                              value="{{ $user->email }}" readonly>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                <div>
                    <label class="block text-blue-200 mb-2 font-medium">Phone Number</label>
                    <input type="tel" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          value="{{ $user->phone }}" readonly>
                </div>
                <div>
                    <label class="block text-blue-200 mb-2 font-medium">Position</label>
                    <input type="text" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          value="{{ $user->position }}" readonly>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block text-blue-200 mb-2 font-medium">Role</label>
                    <input type="text" class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
                          value="{{ $user->role == 'cashier' ? 'Cashier' : ucfirst($user->role) }}" readonly>
                </div>
                <div class="flex items-end">
                    <a href="{{ route('profile.edit') }}" class="w-full px-6 py-3 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors text-center font-medium">
                        Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection