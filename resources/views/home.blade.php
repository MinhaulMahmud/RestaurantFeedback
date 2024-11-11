<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broast Box</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffe4d6 0%, #ffd1d1 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 4rem;
        }
        .nav-button {
            background: #2c3e50;
            color: white;
            width: 200px;
            padding: 0.75rem;
            border-radius: 12px;
            text-align: center;
            margin: 0.5rem 0;
            font-size: 1.2rem;
            transition: transform 0.2s;
        }
        .nav-button:hover {
            transform: scale(1.05);
        }
        .logo {
            margin-bottom: 3rem;
        }
        .logo-image {
            width: 120px;
            height: 120px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="logo">
        <svg class="logo-image" viewBox="0 0 120 120">
            <circle cx="60" cy="60" r="60" fill="#2c3e50"/>
            <rect x="30" y="30" width="40" height="40" fill="white" rx="5"/>
            <path d="M75 35 L 75 45" stroke="red" stroke-width="8" stroke-linecap="round"/>
            <circle cx="40" cy="40" r="3" fill="#2c3e50"/>
            <path d="M70 30 L 80 40" fill="red"/>
        </svg>
        <h1 class="text-2xl font-bold text-center">BROAST BOX</h1>
    </div>

    <a href="{{ route('feedback.create')}}" class="nav-button">
        FEEDBACK
    </a>
    
    <a href="/menu" class="nav-button">
        MENU
    </a>
</body>
</html>