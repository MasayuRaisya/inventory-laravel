@extends('layouts.app')

@section('content')
    <h2>Daftar Produk</h2>
    <a href="{{ route('products.create') }}">+ Tambah Produk</a>
    <br><br>

    <form action="{{ route('products.index') }}" method="GET">
        <input type="text" name="search" placeholder="Cari nama atau SKU..." value="{{ request('search') }}">
        <button type="submit">Cari</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>SKU</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $product->sku }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <br>
    {{ $products->links() }}
@endsection