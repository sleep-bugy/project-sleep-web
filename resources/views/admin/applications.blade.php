@extends('layouts.sleepapp')

@section('title', 'Admin - Team Applications')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-b from-blue-900/30 to-blue-800/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">Team Applications</h1>
        <p class="text-xl text-blue-200">
            Review and manage applications to join the Project Sleep team
        </p>
    </div>
</section>

<!-- Applications Summary Section -->
<section class="py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="card p-6 rounded-xl">
                <p class="text-3xl font-bold text-white">42</p>
                <p class="text-blue-200">Total Applications</p>
            </div>
            <div class="card p-6 rounded-xl">
                <p class="text-3xl font-bold text-white">12</p>
                <p class="text-blue-200">Pending Review</p>
            </div>
            <div class="card p-6 rounded-xl">
                <p class="text-3xl font-bold text-white">28</p>
                <p class="text-blue-200">Processed</p>
            </div>
        </div>
        
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-2xl font-bold text-white">Recent Applications</h2>
            <div class="flex space-x-4">
                <select class="px-4 py-2 rounded-md bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Positions</option>
                    <option>Developer</option>
                    <option>Device Maintainer</option>
                    <option>UI/UX Designer</option>
                    <option>Quality Assurance</option>
                    <option>Community Manager</option>
                    <option>Translator</option>
                </select>
                <select class="px-4 py-2 rounded-md bg-blue-800 text-white border border-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Status</option>
                    <option>Pending</option>
                    <option>Approved</option>
                    <option>Rejected</option>
                </select>
            </div>
        </div>
        
        <div class="card rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead class="bg-blue-800">
                        <tr>
                            <th class="py-3 px-6 text-left text-white">Applicant</th>
                            <th class="py-3 px-6 text-left text-white">Email</th>
                            <th class="py-3 px-6 text-left text-white">Position</th>
                            <th class="py-3 px-6 text-left text-white">Country</th>
                            <th class="py-3 px-6 text-left text-white">Applied Date</th>
                            <th class="py-3 px-6 text-left text-white">Status</th>
                            <th class="py-3 px-6 text-left text-white">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-blue-800">
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">John Anderson</td>
                            <td class="py-4 px-6 text-blue-200">john@example.com</td>
                            <td class="py-4 px-6 text-blue-200">Developer</td>
                            <td class="py-4 px-6 text-blue-200">USA</td>
                            <td class="py-4 px-6 text-blue-200">2025-11-20</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">Pending</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="view-app-btn text-blue-300 hover:text-blue-100" data-applicant="John Anderson">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-400 hover:text-green-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Maria Garcia</td>
                            <td class="py-4 px-6 text-blue-200">maria@example.com</td>
                            <td class="py-4 px-6 text-blue-200">Device Maintainer</td>
                            <td class="py-4 px-6 text-blue-200">Spain</td>
                            <td class="py-4 px-6 text-blue-200">2025-11-18</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-green-800 text-green-200 text-sm">Approved</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="view-app-btn text-blue-300 hover:text-blue-100" data-applicant="Maria Garcia">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-400 hover:text-green-300 opacity-50 cursor-not-allowed" disabled>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300 opacity-50 cursor-not-allowed" disabled>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-4 px-6 text-blue-200 font-medium">Takeshi Yamamoto</td>
                            <td class="py-4 px-6 text-blue-200">takeshi@example.com</td>
                            <td class="py-4 px-6 text-blue-200">Quality Assurance</td>
                            <td class="py-4 px-6 text-blue-200">Japan</td>
                            <td class="py-4 px-6 text-blue-200">2025-11-15</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 rounded-full bg-red-800 text-red-200 text-sm">Rejected</span>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex space-x-2">
                                    <button class="view-app-btn text-blue-300 hover:text-blue-100" data-applicant="Takeshi Yamamoto">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </button>
                                    <button class="text-green-400 hover:text-green-300 opacity-50 cursor-not-allowed" disabled>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </button>
                                    <button class="text-red-400 hover:text-red-300 opacity-50 cursor-not-allowed" disabled>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Application Details Modal -->
<div id="app-details-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex items-center justify-center z-50 p-4">
    <div class="bg-blue-800 rounded-lg max-w-2xl w-full max-h-96 overflow-auto">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 id="modal-applicant-name" class="text-xl font-bold text-white">Applicant Details</h3>
                <button id="close-app-modal" class="text-blue-300 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div id="app-details-content">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <p class="text-blue-200"><span class="font-medium">Name:</span> <span id="app-name">John Anderson</span></p>
                        <p class="text-blue-200"><span class="font-medium">Email:</span> <span id="app-email">john@example.com</span></p>
                        <p class="text-blue-200"><span class="font-medium">Country:</span> <span id="app-country">USA</span></p>
                        <p class="text-blue-200"><span class="font-medium">Position:</span> <span id="app-position">Developer</span></p>
                    </div>
                    <div>
                        <p class="text-blue-200"><span class="font-medium">Applied:</span> <span id="app-date">2025-11-20</span></p>
                        <p class="text-blue-200"><span class="font-medium">Status:</span> <span id="app-status" class="px-2 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm">Pending</span></p>
                    </div>
                </div>
                <div class="mb-4">
                    <p class="text-blue-200 font-medium mb-2">Relevant Experience:</p>
                    <p id="app-experience" class="text-blue-200">5 years of Android development experience. Worked on custom ROM projects for various devices. Expert in Java, Kotlin, and Linux kernel development.</p>
                </div>
                <div>
                    <p class="text-blue-200 font-medium mb-2">Why Join Project Sleep:</p>
                    <p id="app-why-join" class="text-blue-200">I'm passionate about open source development and custom Android ROMs. I've been using custom ROMs for over 5 years and want to contribute to creating better experiences for users worldwide.</p>
                </div>
            </div>
            <div class="mt-6 flex justify-end space-x-4">
                <button id="approve-app" class="px-6 py-2 rounded-md bg-green-600 text-white hover:bg-green-500 transition-colors">
                    Approve
                </button>
                <button id="reject-app" class="px-6 py-2 rounded-md bg-red-600 text-white hover:bg-red-500 transition-colors">
                    Reject
                </button>
                <button id="close-app-modal-bottom" class="px-6 py-2 rounded-md bg-gray-600 text-white hover:bg-gray-500 transition-colors">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const viewAppButtons = document.querySelectorAll('.view-app-btn');
    const modal = document.getElementById('app-details-modal');
    const closeModal = document.getElementById('close-app-modal');
    const closeModalBottom = document.getElementById('close-app-modal-bottom');
    const approveApp = document.getElementById('approve-app');
    const rejectApp = document.getElementById('reject-app');
    
    // Sample application data
    const appData = {
        'John Anderson': {
            name: 'John Anderson',
            email: 'john@example.com',
            country: 'USA',
            position: 'Developer',
            date: '2025-11-20',
            status: 'Pending',
            experience: '5 years of Android development experience. Worked on custom ROM projects for various devices. Expert in Java, Kotlin, and Linux kernel development.',
            whyJoin: 'I\'m passionate about open source development and custom Android ROMs. I\'ve been using custom ROMs for over 5 years and want to contribute to creating better experiences for users worldwide.'
        }
    };
    
    // Open modal with application details
    viewAppButtons.forEach(button => {
        button.addEventListener('click', function() {
            const applicantName = this.getAttribute('data-applicant');
            const applicantData = appData[applicantName] || {
                name: applicantName,
                email: 'applicant@example.com',
                country: 'Unknown',
                position: 'Position',
                date: 'YYYY-MM-DD',
                status: 'Pending',
                experience: 'Experience details here...',
                whyJoin: 'Why they want to join...'
            };
            
            document.getElementById('app-name').textContent = applicantData.name;
            document.getElementById('app-email').textContent = applicantData.email;
            document.getElementById('app-country').textContent = applicantData.country;
            document.getElementById('app-position').textContent = applicantData.position;
            document.getElementById('app-date').textContent = applicantData.date;
            
            const statusElement = document.getElementById('app-status');
            statusElement.textContent = applicantData.status;
            if (applicantData.status === 'Pending') {
                statusElement.className = 'px-2 py-1 rounded-full bg-yellow-800 text-yellow-200 text-sm';
            } else if (applicantData.status === 'Approved') {
                statusElement.className = 'px-2 py-1 rounded-full bg-green-800 text-green-200 text-sm';
            } else {
                statusElement.className = 'px-2 py-1 rounded-full bg-red-800 text-red-200 text-sm';
            }
            
            document.getElementById('app-experience').textContent = applicantData.experience;
            document.getElementById('app-why-join').textContent = applicantData.whyJoin;
            document.getElementById('modal-applicant-name').textContent = applicantData.name;
            
            modal.classList.remove('hidden');
        });
    });
    
    // Close modal
    closeModal.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
    
    closeModalBottom.addEventListener('click', function() {
        modal.classList.add('hidden');
    });
    
    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
    
    // Approve application
    approveApp.addEventListener('click', function() {
        alert('Application approved!');
        modal.classList.add('hidden');
    });
    
    // Reject application
    rejectApp.addEventListener('click', function() {
        alert('Application rejected!');
        modal.classList.add('hidden');
    });
});
</script>
@endsection