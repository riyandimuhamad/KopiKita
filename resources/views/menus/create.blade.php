<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu - KopiKita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-xl p-10 border border-stone-100">
        <h2 class="text-3xl font-black text-stone-900 mb-8 text-center uppercase tracking-tighter">Tambah Menu Kopi</h2>
        
        <form action="{{ route('menus.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Nama Menu</label>
                <input type="text" name="name" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-800 transition" placeholder="Contoh: Es Kopi Gula Aren" required>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Harga (Rp)</label>
                    <input type="number" name="price" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-800 transition" placeholder="15000" required>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Kategori</label>
                    <select name="category" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-800 transition">
                        <option value="Coffee">Coffee</option>
                        <option value="Non-Coffee">Non-Coffee</option>
                        <option value="Food">Food</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="w-full bg-orange-900 text-white font-black py-4 rounded-xl hover:bg-orange-800 shadow-lg shadow-orange-900/20 transition uppercase tracking-widest text-sm">Simpan Menu Baru</button>
            <a href="{{ route('menus.index') }}" class="block text-center text-stone-400 font-bold text-xs uppercase tracking-widest hover:text-stone-600">Batal</a>
        </form>
    </div>
</body>
</html>