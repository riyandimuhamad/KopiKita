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
            <a href="{{ route('menus.create') }}" class="bg-orange-700 px-4 py-2 rounded-full hover:bg-orange-600 transition">+ Tambah Menu</a>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto p-8">
        @if(session('success'))
            <div class="mb-6 p-4 bg-green-100 text-green-700 rounded-xl font-bold border-l-4 border-green-500 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-10 text-center md:text-left">
            <h2 class="text-4xl font-black text-stone-900">Menu Pilihan</h2>
            <p class="text-stone-500">Nikmati kualitas biji kopi terbaik dari Garut.</p>
        </div>

        @if($menus->isEmpty())
            <div class="text-center py-32 bg-white rounded-3xl border-2 border-dashed border-stone-200">
                <p class="text-stone-400 font-medium italic">Belum ada menu tersedia.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($menus as $menu)
                <div class="bg-white rounded-3xl shadow-sm hover:shadow-2xl transition duration-500 border border-stone-100 p-8">
                    <div class="flex justify-between mb-4">
                        <span class="px-3 py-1 bg-stone-100 text-stone-600 text-[10px] font-bold uppercase rounded-full">{{ $menu->category }}</span>
                        <span class="text-xs font-bold {{ $menu->status == 'Available' ? 'text-green-500' : 'text-red-500' }}">● {{ $menu->status }}</span>
                    </div>
                    <h3 class="text-2xl font-bold mb-1">{{ $menu->name }}</h3>
                    <p class="text-3xl font-black text-stone-900 mb-6">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>
                    
                    <div class="flex flex-col gap-2 pt-6 border-t">
                        <a href="{{ route('menus.edit', $menu->id) }}" class="text-center text-xs font-bold uppercase py-3 border border-stone-200 rounded-xl hover:bg-stone-50 transition">Edit</a>
                        
                        <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full text-xs font-bold uppercase py-3 bg-red-50 text-red-600 rounded-xl hover:bg-red-100 transition">Hapus</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</body>
</html>