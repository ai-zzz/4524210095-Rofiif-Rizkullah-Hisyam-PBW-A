<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - LaraPress</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between antialiased">

    <!-- Header / Navbar -->
    <header class="bg-white/80 backdrop-blur-md border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold tracking-tight text-indigo-600 hover:opacity-90 transition">
                LaraPress
            </a>
            <nav class="flex space-x-6 text-sm font-medium">
                <a href="{{ url('/') }}" class="text-slate-600 hover:text-indigo-600 transition">Beranda</a>
                <a href="{{ url('/tentang-kami') }}" class="text-slate-600 hover:text-indigo-600 transition">Tentang Kami</a>
                <a href="{{ url('/kontak') }}" class="text-indigo-600 font-semibold border-b-2 border-indigo-600 pb-0.5">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-16 flex-grow flex items-center justify-center">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200/80 text-center max-w-2xl w-full transition-all duration-300 hover:shadow-md">
            
            <!-- Badge -->
            <span class="inline-flex items-center gap-1.5 bg-indigo-50 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-indigo-500"></span>
                Kontak Kami
            </span>

            <!-- Heading -->
            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                Hubungi LaraPress
            </h1>

            <!-- Description -->
            <p class="text-slate-600 text-base md:text-lg mb-8 leading-relaxed">
                Jika Anda memiliki pertanyaan, saran, atau masukan mengenai pengembangan aplikasi blog ini, jangan ragu untuk menghubungi kami.
            </p>

            <!-- Navigation Buttons -->
            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                <a href="{{ url('/') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2.5 rounded-lg shadow-sm transition active:scale-95">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Kembali ke Beranda
                </a>
                <a href="{{ url('/tentang-kami') }}" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium px-5 py-2.5 rounded-lg transition active:scale-95">
                    Halaman Tentang Kami
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-6 text-center text-slate-500 text-sm">
        <p>&copy; {{ date('Y') }} <span class="font-semibold text-slate-700">LaraPress</span>. All rights reserved.</p>
    </footer>

</body>
</html>