<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap');
        
        .font-cormorant {
            font-family: 'Cormorant Garamond', serif;
        }
        .font-montserrat {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-pink-50">
    <div class="max-w-md mx-auto min-h-screen pb-20">
        <!-- Header -->
        <header class="text-center pt-12 pb-8">
            <div class="w-20 h-20 bg-slate-800 rounded-full mx-auto mb-4 flex items-center justify-center">
                <i class="fas fa-camera text-white text-2xl"></i>
            </div>
            <h1 class="font-cormorant text-4xl font-bold text-slate-800 mb-1">BROAST BOX</h1>
            <p class="font-montserrat text-sm tracking-widest text-slate-600">ESTABLISHED 2024</p>
        </header>

        <!-- Menu Categories -->
        <nav class="px-6 mb-8">
            <div class="grid grid-cols-3 gap-2">
                <button class="bg-slate-800 text-white py-3 px-4 rounded-lg font-montserrat text-sm hover:bg-slate-700 transition-colors">
                    Signature
                </button>
                <button class="bg-pink-100 text-slate-800 py-3 px-4 rounded-lg font-montserrat text-sm hover:bg-pink-200 transition-colors">
                    Classics
                </button>
                <button class="bg-pink-100 text-slate-800 py-3 px-4 rounded-lg font-montserrat text-sm hover:bg-pink-200 transition-colors">
                    Sides
                </button>
            </div>
        </nav>

        <!-- Menu Items -->
        <div class="px-6">
            <h2 class="font-cormorant text-2xl font-bold text-slate-800 mb-6">Signature Selection</h2>
            
            <div class="space-y-6">
                <!-- Menu Item 1 -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-cormorant text-xl font-bold text-slate-800">Crown Royal Broast</h3>
                        <span class="font-montserrat text-lg font-medium text-slate-800">$32</span>
                    </div>
                    <p class="font-montserrat text-sm text-slate-600 leading-relaxed">
                        Our signature whole chicken, marinated for 24 hours in exotic spices and herbs, served with royal gravy
                    </p>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-cormorant text-xl font-bold text-slate-800">Golden Truffle Wings</h3>
                        <span class="font-montserrat text-lg font-medium text-slate-800">$28</span>
                    </div>
                    <p class="font-montserrat text-sm text-slate-600 leading-relaxed">
                        Premium wings tossed in black truffle sauce, finished with gold dust
                    </p>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex justify-between items-start mb-3">
                        <h3 class="font-cormorant text-xl font-bold text-slate-800">Legacy Broast Platter</h3>
                        <span class="font-montserrat text-lg font-medium text-slate-800">$45</span>
                    </div>
                    <p class="font-montserrat text-sm text-slate-600 leading-relaxed">
                        A royal feast of mixed cuts with three signature sauces and seasonal garnishes
                    </p>
                </div>
            </div>
        </div>

        <!-- Bottom Navigation -->
        <nav class="fixed bottom-0 left-0 right-0 bg-white border-t border-slate-200">
            <div class="max-w-md mx-auto px-6 py-4 flex justify-between">
                <button class="flex flex-col items-center">
                    <i class="fas fa-comment text-slate-800 mb-1"></i>
                    <span class="font-montserrat text-xs text-slate-800">Feedback</span>
                </button>
                <button class="flex flex-col items-center">
                    <i class="fas fa-bars text-slate-800 mb-1"></i>
                    <span class="font-montserrat text-xs text-slate-800">Menu</span>
                </button>
            </div>
        </nav>
    </div>
</body>
</html>