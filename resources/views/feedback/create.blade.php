<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .animated-bg {
            background: linear-gradient(-45deg, #ff7eb3, #7c3aed, #2dd4bf, #f59e0b);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(-2deg); }
            75% { transform: translateY(10px) rotate(2deg); }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes slideIn {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes scaleIn {
            from { transform: scale(0.8); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        .slide-in {
            animation: slideIn 0.6s ease-out forwards;
        }

        .scale-in {
            animation: scaleIn 0.5s ease-out forwards;
        }

        .star-rating button {
            transition: all 0.3s ease;
        }

        .star-rating button:hover {
            transform: scale(1.2) rotate(15deg);
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .input-field {
            transition: all 0.3s ease;
        }

        .input-field:focus {
            transform: scale(1.02);
            box-shadow: 0 0 15px rgba(124, 58, 237, 0.3);
        }

        /* Added text shadow for better visibility */
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body class="animated-bg min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-8 animate-float">
                <h1 class="text-5xl font-bold text-white mb-2 text-shadow">Share Your Experience!</h1>
                <p class="text-white text-lg text-shadow">Your opinion matters to us ✨</p>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg relative mb-6 scale-in" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif

            <!-- Feedback Form -->
            <form action="{{ route('feedback.store') }}" method="POST" 
                  class="glass-effect rounded-2xl shadow-2xl p-6 md:p-8 scale-in" 
                  x-data="{ rating: 0 }">
                @csrf

                <!-- Name & Email -->
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <div class="slide-in" style="animation-delay: 0.1s">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="name">
                            Your Name
                        </label>
                        <input type="text" name="name" id="name" required
                               class="input-field w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-800 placeholder-gray-500"
                               placeholder="John Doe">
                    </div>
                    <div class="slide-in" style="animation-delay: 0.2s">
                        <label class="block text-gray-800 text-sm font-bold mb-2" for="email">
                            Email Address
                        </label>
                        <input type="email" name="email" id="email" required
                               class="input-field w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-800 placeholder-gray-500"
                               placeholder="john@example.com">
                    </div>
                </div>

                <!-- Rating -->
                <div class="mb-6 slide-in" style="animation-delay: 0.3s">
                    <label class="block text-gray-800 text-sm font-bold mb-2">
                        Rate Your Experience
                    </label>
                    <div class="star-rating flex space-x-3">
                        <template x-for="i in 5" :key="i">
                            <button type="button" 
                                    @click="rating = i" 
                                    :class="{ 'text-yellow-400': rating >= i, 'text-gray-300': rating < i }"
                                    class="text-4xl focus:outline-none transition-all duration-300"
                                    x-text="'★'">
                            </button>
                        </template>
                        <input type="hidden" name="rating" x-model="rating">
                    </div>
                </div>

                <!-- Ordered Items -->
                <div class="mb-6 slide-in" style="animation-delay: 0.4s">
                    <label class="block text-gray-800 text-sm font-bold mb-2" for="ordered_items">
                        What Did You Order?
                    </label>
                    <textarea name="ordered_items" id="ordered_items" required
                              class="input-field w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-800 placeholder-gray-500"
                              rows="2" placeholder="List the items you ordered..."></textarea>
                </div>

                <!-- Feedback -->
                <div class="mb-6 slide-in" style="animation-delay: 0.5s">
                    <label class="block text-gray-800 text-sm font-bold mb-2" for="feedback">
                        Tell Us More
                    </label>
                    <textarea name="feedback" id="feedback" required
                              class="input-field w-full px-4 py-3 bg-white border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-gray-800 placeholder-gray-500"
                              rows="3" placeholder="Share your experience with us..."></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="w-full bg-gradient-to-r from-purple-600 to-pink-500 hover:from-purple-700 hover:to-pink-600 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-opacity-50 slide-in"
                        style="animation-delay: 0.6s">
                    Send Feedback ✨
                </button>
            </form>
        </div>
    </div>

    <script>
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('input, textarea, button, .slide-in');
            formElements.forEach((el) => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                observer.observe(el);
            });
        });
    </script>
</body>
</html>