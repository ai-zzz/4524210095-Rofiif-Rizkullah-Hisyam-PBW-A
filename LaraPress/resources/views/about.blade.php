<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 min-h-screen flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-10">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold tracking-tight text-indigo-600">LaraPress</a>
            <nav class="flex space-x-6 text-sm font-medium">
                <a href="/" class="text-slate-600 hover:text-indigo-600 transition">Beranda</a>
                <a href="/tentang-kami" class="text-indigo-600 font-semibold">Tentang Kami</a>
                <a href="/kontak" class="text-slate-600 hover:text-indigo-600 transition">Kontak</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-6 py-16 flex-grow flex items-center justify-center">
        <div class="bg-white p-8 md:p-12 rounded-2xl shadow-sm border border-slate-200 text-center max-w-2xl w-full">
            <span class="inline-block bg-indigo-50 text-indigo-700 text-xs font-semibold px-3 py-1 rounded-full mb-4">
                Tentang Kami
            </span>
            <h1 class="text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight mb-4">
                Tentang LaraPress
            </h1>
            <p class="text-slate-600 text-base md:text-lg mb-8 leading-relaxed">
                LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari dasar-dasar framework Laravel 12.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 justify-center">
                <a href="/" class="bg-indigo-600 hover:bg-indigo-700 text-white font-medium px-5 py-2.5 rounded-lg shadow-sm transition">
                    Kembali ke Beranda
                </a>
                <a href="/kontak" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium px-5 py-2.5 rounded-lg transition">
                    Halaman Kontak
                </a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-6 text-center text-slate-500 text-sm">
        <p>&copy; {{ date('Y') }} LaraPress. All rights reserved.</p>
    </footer>

</body>
</html>
