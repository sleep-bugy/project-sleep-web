@extends('layouts.sleepapp')

@section('title', 'Login - Project Sleep')

@section('content')
<div class="flex items-center justify-center min-h-screen py-12">
    <div class="w-full max-w-md">
        <div class="card p-8 rounded-xl shadow-lg">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-white">Welcome Back</h2>
                <p class="text-blue-200 mt-2">Sign in to your Project Sleep account</p>
            </div>

            <!-- Session Status -->
            @if(session('status'))
                <div class="mb-4 p-4 bg-green-800 text-green-200 rounded-lg">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Username -->
                <div class="mb-6">
                    <label for="username" class="block text-blue-200 mb-2">Username</label>
                    <input id="username" type="text" name="username"
                           class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white placeholder-blue-300 border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('username') border-red-500 @enderror"
                           value="{{ old('username') }}" required autofocus autocomplete="username">
                    @error('username')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block text-blue-200 mb-2">Password</label>
                    <input id="password" type="password" name="password"
                           class="w-full px-4 py-3 rounded-lg bg-blue-800 text-white placeholder-blue-300 border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                           required autocomplete="current-password">
                    @error('password')
                        <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Remember me -->
                <div class="mb-6 flex items-center">
                    <input id="remember_me" type="checkbox" class="h-4 w-4 text-blue-600 rounded bg-blue-800 border-blue-700 focus:ring-blue-500" name="remember">
                    <label for="remember_me" class="ml-2 block text-sm text-blue-200">
                        Remember me
                    </label>
                </div>

                <button type="submit" class="w-full px-4 py-3 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors font-medium">
                    Sign In
                </button>

                @if ($errors->any())
                    <div class="mt-4 p-4 bg-red-800 text-red-200 rounded-lg">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            
            <div class="mt-6 text-center">
                @if (Route::has('password.request'))
                    <a class="text-blue-400 hover:text-blue-300 text-sm" href="{{ route('password.request') }}">
                        Forgot your password?
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection