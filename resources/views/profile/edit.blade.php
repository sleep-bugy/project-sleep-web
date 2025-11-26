@extends('layouts.sleepapp')

@section('title', 'Profile - Project Sleep')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Profile Management</h1>
        <p class="text-xl text-blue-200">
            Update your profile information and settings
        </p>
    </div>
</section>

<!-- Profile Form Section -->
<section class="py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="card rounded-xl p-8">
            <form method="POST" action="{{ route('profile.update', $user) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="name" class="block text-blue-200 mb-2">Name <span class="text-red-500">*</span></label>
                        <input id="name" type="text" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                              name="name" value="{{ old('name') ? old('name') : $user->name }}" required autocomplete="name" autofocus>
                        @error('name')
                            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="username" class="block text-blue-200 mb-2">Username <span class="text-red-500">*</span></label>
                        <input id="username" type="text" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('username') border-red-500 @enderror"
                              name="username" value="{{ old('username') ? old('username') : $user->username }}" required autocomplete="username" autofocus>
                        @error('username')
                            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="email" class="block text-blue-200 mb-2">Email <span class="text-red-500">*</span></label>
                        <input id="email" type="email" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                              name="email" value="{{ old('email') ? old('email') : $user->email }}" required autocomplete="email" autofocus>
                        @error('email')
                            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-blue-200 mb-2">Phone Number <span class="text-red-500">*</span></label>
                        <input id="phone" type="text" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('phone') border-red-500 @enderror"
                              name="phone" value="{{ old('phone') ? old('phone') : $user->phone }}" required autocomplete="phone" autofocus>
                        @error('phone')
                            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="position" class="block text-blue-200 mb-2">Position</label>
                        <input id="position" type="text" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('position') border-red-500 @enderror"
                              name="position" value="{{ old('position') ? old('position') : $user->position }}" autocomplete="position" autofocus>
                        @error('position')
                            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <div>
                        <label for="picture" class="block text-blue-200 mb-2">Profile Picture</label>
                        <div class="flex items-center">
                            <div class="mr-4">
                                <img src="/assets/images/users/{{ $user->picture }}" alt="Profile" id="img-preview" class="w-16 h-16 rounded-full object-cover">
                            </div>
                            <div>
                                <input type="file" name="picture" class="w-full px-4 py-3 rounded-lg bg-blue-700 text-white placeholder-blue-300 border border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 @error('picture') border-red-500 @enderror"
                                      id="picture">
                                <p class="text-blue-300 text-sm mt-2">Leave empty if you don't want to change it</p>
                                <p class="text-blue-300 text-sm">Make sure the photo is square 1:1</p>
                                @error('picture')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex justify-end mt-8">
                    <button type="submit" class="px-6 py-3 rounded-md bg-blue-600 text-white hover:bg-blue-500 transition-colors font-medium">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const pictureInput = document.getElementById('picture');
        const imgPreview = document.getElementById('img-preview');
        
        if (pictureInput) {
            pictureInput.addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const fileReader = new FileReader();
                    fileReader.onload = function(e) {
                        imgPreview.src = e.target.result;
                    }
                    fileReader.readAsDataURL(file);
                }
            });
        }
    });
</script>
@endsection