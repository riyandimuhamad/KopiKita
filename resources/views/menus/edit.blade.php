<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu - KopiKita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-50 p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-3xl shadow-xl p-10 border border-stone-100">
        <h2 class="text-3xl font-black text-stone-900 mb-8 text-center uppercase tracking-tighter">Edit Menu Kopi</h2>
        
        <form action="{{ route('menus.update', $menu->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT') <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Nama Menu</label>
                <input type="text" name="name" value="{{ $menu->name }}" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-800" required>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Harga (Rp)</label>
                    <input type="number" name="price" value="{{ $menu->price }}" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-orange-800" required>
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Kategori</label>
                    <select name="category" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl">
                        <option value="Coffee" {{ $menu->category == 'Coffee' ? 'selected' : '' }}>Coffee</option>
                        <option value="Non-Coffee" {{ $menu->category == 'Non-Coffee' ? 'selected' : '' }}>Non-Coffee</option>
                        <option value="Food" {{ $menu->category == 'Food' ? 'selected' : '' }}>Food</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase tracking-widest text-stone-500 mb-2">Status</label>
                <select name="status" class="w-full p-4 bg-stone-50 border border-stone-200 rounded-xl">
                    <option value="Available" {{ $menu->status == 'Available' ? 'selected' : '' }}>Available</option>
                    <option value="Sold Out" {{ $menu->status == 'Sold Out' ? 'selected' : '' }}>Sold Out</option>
                </select>
            </div>

            <button type="submit" class="w-full bg-orange-900 text-white font-black py-4 rounded-xl hover:bg-orange-800 shadow-lg transition uppercase tracking-widest text-sm">Simpan Perubahan</button>
            <a href="{{ route('menus.index') }}" class="block text-center text-stone-400 font-bold text-xs uppercase tracking-widest">Batal</a>
        </form>
    </div>
</body>
</html>