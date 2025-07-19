<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abhi's Professional Profile</title>
   
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center min-h-screen font-sans antialiased p-4">

    <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl max-w-4xl w-full border border-blue-100 transform transition-all duration-500">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row items-center md:items-start space-y-6 md:space-y-0 md:space-x-8 mb-10 pb-6 border-b border-gray-200">
            <!-- Profile Picture -->
            <img src="https://placehold.co/150x150/E0E7FF/4F46E5?text=AB" alt="Abhi's Profile Picture" class="w-36 h-36 rounded-full border-4 border-blue-300 shadow-lg flex-shrink-0 object-cover">

            <!-- Name and Headline -->
            <div class="text-center md:text-left">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight mb-2">Abhi Gtm</h1>
                <p class="text-xl md:text-2xl text-gray-600 font-semibold mb-3">Full-Stack Developer | Laravel & Vue.js Enthusiast</p>
                <p class="text-gray-500 text-sm">Location: Your City, Your Country</p>
            </div>
        </div>

        <!-- About/Summary Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">About</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                Highly motivated and results-driven Full-Stack Developer with X years of experience in designing, developing, and deploying robust web applications. Proficient in PHP (Laravel), JavaScript (Vue.js, React), and various database technologies (MySQL, PostgreSQL). Passionate about creating efficient, scalable, and user-friendly solutions that solve real-world problems. Always eager to learn new technologies and contribute to innovative projects.
            </p>
        </div>

        <!-- Experience Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">Experience</h2>
            <div class="space-y-6">
                <!-- Experience Item 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-900">Senior Software Engineer</h3>
                    <p class="text-blue-600 text-md">Tech Solutions Inc. | Jan 2022 – Present</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2 space-y-1">
                        <li>Led the development of scalable backend APIs using Laravel for a high-traffic e-commerce platform.</li>
                        <li>Collaborated with front-end teams to integrate user interfaces with RESTful services.</li>
                        <li>Implemented robust testing strategies, reducing bugs by 20%.</li>
                    </ul>
                </div>
                <!-- Experience Item 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-900">Junior Web Developer</h3>
                    <p class="text-blue-600 text-md">Web Innovators Co. | Jun 2019 – Dec 2021</p>
                    <ul class="list-disc list-inside text-gray-700 mt-2 space-y-1">
                        <li>Developed responsive web pages and interactive UI components using HTML, CSS, and JavaScript.</li>
                        <li>Assisted in database design and optimization for various client projects.</li>
                        <li>Contributed to code reviews and maintained documentation for new features.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Education Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">Education</h2>
            <div class="space-y-6">
                <!-- Education Item 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-900">Bachelor of Technology in Computer Science</h3>
                    <p class="text-blue-600 text-md">Your University Name | 2015 – 2019</p>
                    <p class="text-gray-700 mt-2">Specialized in Software Engineering and Database Management.</p>
                </div>
                <!-- Education Item 2 (Optional) -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm border border-gray-100">
                    <h3 class="text-xl font-semibold text-gray-900">High School Diploma</h3>
                    <p class="text-blue-600 text-md">Your High School Name | 2013 – 2015</p>
                </div>
            </div>
        </div>

        <!-- Skills Section -->
        <div class="mb-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-4 border-b-2 border-blue-500 pb-2 inline-block">Skills</h2>
            <div class="flex flex-wrap justify-center gap-3">
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">Laravel</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">PHP</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">JavaScript</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">Vue.js</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">Tailwind CSS</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">MySQL</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">Git</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">RESTful APIs</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">AWS (EC2, S3)</span>
                <span class="bg-purple-200 text-purple-800 text-md font-medium px-4 py-2 rounded-full shadow-sm">Agile Methodologies</span>
            </div>
        </div>

        <!-- Contact/Links Section -->
        <div class="text-center pt-6 border-t border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Connect with Me</h2>
            <a href="https://www.linkedin.com/in/your-linkedin-profile" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center bg-blue-700 hover:bg-blue-800 text-white font-bold py-3 px-6 rounded-full shadow-lg
                      transition duration-300 ease-in-out transform hover:scale-105
                      focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75">
                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.381 1.11-2.5 2.48-2.5s2.48 1.119 2.48 2.5zM.02 24h4.96v-16h-4.96zM9.52 7.9c-2.43 0-4.73 1.35-5.91 3.27v-3.27h-4.96c.06 1.33.06 2.67.06 4v16h4.96v-8.8c0-1.92 1.25-3.13 2.92-3.13 1.67 0 2.92 1.21 2.92 3.13v8.8h4.96v-8.8c0-1.92 1.25-3.13 2.92-3.13 1.67 0 2.92 1.21 2.92 3.13v8.8h4.96v-16h-4.96z"></path>
                </svg>
                View LinkedIn Profile
            </a>
            <p class="text-gray-500 text-sm mt-4">Email: your.email@example.com | Phone: +123 456 7890</p>
        </div>

        <!-- Back to Home Button -->
        <a href="/firstLaravel/public/home"
           class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg mt-8
                  transition duration-300 ease-in-out transform hover:scale-105
                  focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-75">
            Back to Home
        </a>
    </div>

    <!-- Optional: Simple CSS animation for fade-in effect -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body > div { /* Target the main container div */
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</body>
</html>
