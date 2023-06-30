@extends('app.dashboard.template')
@section('dashboard_title')
    Detail Produk
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
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
@section('dashboard_content')
    <div class="h-full">
        <div class="rounded">
            <img class="w-full rounded-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
        </div>
        <div class="flex w-full items-center justify-between mt-2">
            <small class="fw-bold text-muted" id="total_likes">
                ❤️ 26 orang suka ini
            </small>
            <button class="btn" onclick="like(this);">
                <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
            </button>
        </div>
        <div>
            <p class="font-bold my-1">Baju Kemeja</p>
            <p class="text-green-500">Rp. 55.000</p>
            <p class="font-bold my-1">Deskripsi Produk</p>
            <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci asperiores, minima sit nisi consectetur delectus quaerat eius, exercitationem ducimus voluptates id magnam doloremque vitae iste voluptatum sunt distinctio labore velit.</p>
        </div>
        <button class="bg-green-600 w-full py-2 rounded text-sm my-2 text-white">Masukan Keranjang</button>
    </div>
@endsection

@section('dashboard_js')

@endsection
