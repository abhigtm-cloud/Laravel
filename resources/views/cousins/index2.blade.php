<x-layouts>

        <!-- Profile Header Section -->
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8 mb-10 pb-6 border-b border-gray-200">
            <!-- Name, Headline, Age -->
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight mb-2">{{ $cousin['name'] ?? 'N/A' }}</h1>
                <p class="text-xl md:text-2xl text-gray-600 font-semibold mb-3">{{ $cousin['headline'] ?? 'No Headline Available' }}</p>
                <p class="text-gray-500 text-md">Age: {{ $cousin['Age'] ?? 'N/A' }}</p>

                <!-- LinkedIn Button -->
                <a href="{{ $cousin['SocialMedia'] ?? '#' }}" target="_blank" rel="noopener noreferrer"
                   class="inline-flex items-center mt-4 px-6 py-2 bg-blue-600 text-white font-semibold rounded-full shadow-md hover:bg-blue-700 transition duration-300 ease-in-out">
                    View LinkedIn
                    <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                </a>
            </div>
        </div>

        <!-- About/Summary Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">About</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                {{ $cousin['summary'] }}
            </p>
        </div>

        <!-- Skills Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">Key Skills</h2>
            <div class="flex flex-wrap justify-center gap-3">
                @foreach (array_slice($cousin['skills'] ?? [], 0, 8) as $skill) {{-- Displaying only up to 8 skills --}}
                <span class="bg-indigo-200 text-indigo-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">{{ $skill }}</span>
                @endforeach
               
            </div>
        </div>

        <!-- Back to Cousins List Button -->
        <a href="/firstLaravel/public/cousins"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg mt-8
                  transition duration-300 ease-in-out transform hover:scale-105
                  focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75">
            Back to Cousins List
        </a>
    </div>
</x-layouts>