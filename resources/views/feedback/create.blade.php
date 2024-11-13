<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffe4d6 0%, #ffd1d1 100%);
            min-height: 100vh;
            padding: 1rem;
            font-family: Arial, sans-serif;
        }
        .logo-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding: 0 0.5rem;
        }
        .logo {
            width: 40px;
            height: 40px;
            background: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .logo svg {
            width: 24px;
            height: 24px;
            color: #ff6b6b;
        }
        .restaurant-name {
            font-size: 1.25rem;
            font-weight: bold;
            color: #2c3e50;
        }
        .input-field {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
            background: rgba(255, 255, 255, 0.9);
        }
        .submit-btn {
            background: #2c3e50;
            color: white;
            padding: 0.75rem;
            border-radius: 8px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            cursor: pointer;
        }
        .star-rating {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin: 1rem 0;
        }
        .star {
            font-size: 1.5rem;
            color: #ddd;
            cursor: pointer;
        }
        .star.active {
            color: rgba(184, 24, 88, 0.8);
        }
        label {
            color: #2c3e50;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="max-w-md mx-auto">
        <!-- Logo and Name -->
        <div class="logo-container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <circle cx="12" cy="12" r="3"/>
                    <line x1="12" y1="2" x2="12" y2="4"/>
                    <line x1="12" y1="20" x2="12" y2="22"/>
                    <line x1="2" y1="12" x2="4" y2="12"/>
                    <line x1="20" y1="12" x2="22" y2="12"/>
                </svg>
            </div>
            <div class="restaurant-name">BROAST BOX</div>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold mb-2">THANK YOU</h1>
            <p class="text-lg">FOR YOUR FEEDBACK</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif

        <!-- Feedback Form -->
        <form action="{{ route('feedback.store') }}" method="POST">
            @csrf
            
            <div>
                <label>Name :-</label>
                <input type="text" name="name" class="input-field" required>
            </div>

            <div>
                <label>Email :-</label>
                <input type="email" name="email" class="input-field" required>
            </div>

            <div>
                <label>What Did You Order ?</label>
                <input type="text" name="ordered_items" class="input-field" required>
            </div>

            <div>
                <label class="block text-center mb-2">Rating</label>
                <div class="star-rating">
                    <span class="star" data-rating="1">☆</span>
                    <span class="star" data-rating="2">☆</span>
                    <span class="star" data-rating="3">☆</span>
                    <span class="star" data-rating="4">☆</span>
                    <span class="star" data-rating="5">☆</span>
                </div>
                <input type="hidden" name="rating" id="rating-value" value="0">
            </div>

            <div>
                <label>What's Your Feedback ?</label>
                <textarea name="feedback" class="input-field" rows="3" required></textarea>
            </div>

            <div>
                <label>Suggestion For Improvement !</label>
                <textarea name="suggestions" class="input-field" rows="3"></textarea>
            </div>

            <button type="submit" class="submit-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
                Submit Feedback
            </button>
        </form>
    </div>

    <script>
        // Star rating functionality
        const stars = document.querySelectorAll('.star');
        const ratingInput = document.getElementById('rating-value');
        
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                const rating = star.dataset.rating;
                ratingInput.value = rating;
                
                stars.forEach((s, i) => {
                    if (i < rating) {
                        s.textContent = '★';
                        s.classList.add('active');
                    } else {
                        s.textContent = '☆';
                        s.classList.remove('active');
                    }
                });
            });
        });
    </script>
</body>
</html>