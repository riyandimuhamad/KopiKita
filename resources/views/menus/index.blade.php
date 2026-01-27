<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KopiKita - Katalog Menu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 text-stone-800">
    <nav class="bg-orange-900 text-white shadow-xl p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black italic tracking-tighter">KOPIKITA.</h1>
            <div class="space-x-4 font-bold uppercase text-xs">
                <a href="#" class="bg-orange-700 px-4 py-2 rounded-full hover:bg-orange-600 transition">+ Tambah Menu</a>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto p-8">
        <div class="flex justify-between items-end mb-10">
            <div>
                <h2 class="text-4xl font-black text-stone-900">Menu Pilihan</h2>
                <p class="text-stone-500 font-medium">Nikmati kualitas biji kopi terbaik dari Garut.</p>
            </div>
        </div>

        @if($menus->isEmpty())
            <div class="text-center py-32 bg-white rounded-3xl border-2 border-dashed border-stone-200">
                <p class="text-stone-400 font-medium italic">Belum ada menu tersedia. Silakan tambahkan menu baru!</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($menus as $menu)
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-2xl transition duration-500 group border border-stone-100">
                    <div class="p-8">
                        <div class="flex justify-between mb-4">
                            <span class="px-3 py-1 bg-stone-100 text-stone-600 text-[10px] font-bold uppercase rounded-full tracking-widest">{{ $menu->category }}</span>
                            <span class="text-xs font-bold {{ $menu->status == 'Available' ? 'text-green-500' : 'text-red-500' }}">● {{ $menu->status }}</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-1 group-hover:text-orange-800 transition">{{ $menu->name }}</h3>
                        <p class="text-3xl font-black text-stone-900 mb-6">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
                        
                        <div class="flex gap-3 border-t pt-6">
                            <button class="flex-1 text-xs font-bold uppercase tracking-widest py-3 border border-stone-200 rounded-xl hover:bg-stone-50 transition">Edit</button>
                            <button class="flex-1 text-xs font-bold uppercase tracking-widest py-3 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition">Hapus</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>