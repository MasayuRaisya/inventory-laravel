```html
@extends('layouts.app')

@section('content')
    <h2>Tambah Produk Baru</h2>
    <a href="{{ route('products.index') }}">Kembali</a>
    <br><br>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label>Kategori:</label><br>
            <select name="category_id">
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <div>
            <label>SKU:</label><br>
            <input type="text" name="sku" value="{{ old('sku') }}">
            @error('sku') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <div>
            <label>Nama Produk:</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <div>
            <label>Harga:</label><br>
            <input type="number" name="price" value="{{ old('price') }}">
            @error('price') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <div>
            <label>Stok Awal:</label><br>
            <input type="number" name="stock" value="{{ old('stock', 0) }}">
            @error('stock') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <div>
            <label>Stok Minimum:</label><br>
            <input type="number" name="minimum_stock" value="{{ old('minimum_stock', 5) }}">
            @error('minimum_stock') <div class="error">{{ $message }}</div> @enderror
        </div><br>

        <button type="submit">Simpan Produk</button>
    </form>
@endsection