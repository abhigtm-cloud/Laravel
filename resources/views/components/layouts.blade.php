<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title Here</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Custom CSS for subtle animation if not handled by Tailwind plugins */
        @keyframes fadeInScale {
            from { opacity: 0; transform: scale(0.95) translateY(20px); }
            to { opacity: 1; transform: scale(1) translateY(0); }
        }
        .animate-fadeInScale {
            animation: fadeInScale 0.8s ease-out forwards;
        }
    </style>
</head>
<!-- Body: Full screen, centered content, modern gradient background, Inter font -->
<body class="bg-gradient-to-br from-blue-700 via-purple-800 to-pink-600 flex items-center justify-center min-h-screen font-inter antialiased text-gray-900 p-4">

    <!-- Main Content Wrapper: This div will contain the actual content passed to $slot -->
    <div class="bg-white p-8 md:p-12 rounded-3xl shadow-2xl max-w-4xl w-full border border-blue-100 transform transition-all duration-500 animate-fadeInScale">
        {{ $slot }}
    </div>

</body>
</html>