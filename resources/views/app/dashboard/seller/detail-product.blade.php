@extends('app.dashboard.template')
@section('dashboard_title')
    Detail Produk
@endsection
@section('back')
    <button onclick="history.back()" class="absolute left-2">
        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"
            stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
            <line x1="19" y1="12" x2="5" y2="12"></line>
            <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
    </button>
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <form action="">
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Nama Produk</label>
                <input required value="Baju Kemeja" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan nama produk...">
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Deskripsi Produk</label>
                <textarea required cols="50" rows="4" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan deskripsi produk...">Baju Kemeja Warna hitam keren</textarea>
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Harga Produk</label>
                <input required value="55000" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="number" placeholder="Masukan nama produk...">
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Stok Produk</label>
                <input required value="10" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="number" placeholder="Masukan stok produk...">
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Link Gambar Produk</label>
                <input required value="https://example.com" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan link gambar produk...">
            </div>
            <button class="bg-red-500 w-full text-white py-2 rounded">Buat Produk</button>
        </form>
    </div>
@endsection

@section('dashboard_js')

@endsection
