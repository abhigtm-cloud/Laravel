<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Innovative App</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-indigo-700 via-purple-700 to-pink-600 flex items-center justify-center min-h-screen font-sans p-4 antialiased text-gray-900">
    <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl text-center max-w-3xl w-full border border-gray-100 transform transition-all duration-500 hover:scale-105">
        <h1 class="text-7xl md:text-8xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-800 mb-6 uppercase tracking-tight leading-none">
            Welcome
        </h1>

        <p class="text-xl md:text-2xl text-gray-700 leading-relaxed mb-10">
            Discover the future with our cutting-edge application. We're dedicated to providing
            an exceptional experience tailored just for you.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Feature Card 1: Intuitive Design -->
            <div class="bg-indigo-50 p-6 rounded-lg shadow-md border border-indigo-100 flex flex-col items-center transform hover:scale-105 transition-transform duration-200">
                <svg class="w-14 h-14 text-indigo-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1l-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <h3 class="text-2xl font-semibold text-indigo-800 mb-2">Intuitive Design</h3>
                <p class="text-gray-600 text-base">Effortless navigation and a user-friendly interface for everyone.</p>
            </div>
            <!-- Feature Card 2: Powerful Performance -->
            <div class="bg-purple-50 p-6 rounded-lg shadow-md border border-purple-100 flex flex-col items-center transform hover:scale-105 transition-transform duration-200">
                <svg class="w-14 h-14 text-purple-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <h3 class="text-2xl font-semibold text-purple-800 mb-2">Powerful Performance</h3>
                <p class="text-gray-600 text-base">Experience speed and reliability with our optimized backend.</p>
            </div>
            <!-- Feature Card 3: Secure & Reliable -->
            <div class="bg-pink-50 p-6 rounded-lg shadow-md border border-pink-100 flex flex-col items-center transform hover:scale-105 transition-transform duration-200">
                <svg class="w-14 h-14 text-pink-600 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v3h8z"></path></svg>
                <h3 class="text-2xl font-semibold text-pink-800 mb-2">Secure & Reliable</h3>
                <p class="text-gray-600 text-base">Your data is safe with us, protected by industry-leading security.</p>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="mb-10 pt-6 border-t border-gray-100">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Ready to Get Started?</h2>
            <p class="text-lg text-gray-700 mb-8">
                Join our growing community and unlock a world of possibilities.
            </p>
            <a href="/firstLaravel/public/about"
               class="inline-flex items-center justify-center px-10 py-4 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-gradient-to-r from-teal-500 to-cyan-600 hover:from-teal-600 hover:to-cyan-700
                      focus:outline-none focus:ring-4 focus:ring-teal-300 focus:ring-opacity-75
                      transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                Discover More
                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="/firstLaravel/public/smp"
               class="inline-flex items-center justify-center px-10 py-4 border border-transparent text-base font-medium rounded-full shadow-lg text-white bg-gradient-to-r from-teal-500 to-cyan-600 hover:from-teal-600 hover:to-cyan-700
                      focus:outline-none focus:ring-4 focus:ring-teal-300 focus:ring-opacity-75
                      transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-xl">
                $slot function
                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</body>
</html>
