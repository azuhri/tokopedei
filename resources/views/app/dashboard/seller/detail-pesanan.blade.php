@extends('app.dashboard.template')
@section('dashboard_title')
    Detail Pesanan
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
        <div class="flex justify-between border-2 p-2 rounded">
            <div class="flex flex-col text-sm">
                <p class="text-red-500 font-bold">
                    #TK-92321-2023Y
                </p>
                <small>16/03/2023 | 08:03</small>
            </div>
            <button class="bg-slate-400 text-xs px-4 rounded text-white">
                Pesanan Baru
            </button>
        </div>
        <div class="flex flex-col border p-2 text-sm my-2 rounded">
            <div>
                <p class="font-bold">Nama Pemesan: </p>
                <p class="font-bold text-red-500 mb-2">Azis Zuhri Pratomo</p>
                <p class="font-bold">No HP Pemesan: </p>
                <p class="font-bold text-red-500 mb-2">+620892132138</p>
                <p class="font-bold">Alamat Pemesan Pemesan: </p>
                <p class="font-bold text-red-500 mb-2">Jl Raya Hankam No. 13</p>
            </div>
            <a class="w-full flex border border-green-500 text-green-500 font-bold justify-center p-2 rounded" href="#" target="_blank">
                <img src="https://app.bakoelomah.com/icon/whatsapp.svg" alt="" class="mx-1 img-fluid">
                Chat Pembeli
            </a>
        </div>
        <div class="my-1 p-2 border rounded">
            <p class="text-xs text-slate-500 mb-1">Produk Pesanan</p>
            <div class="grid grid-cols-7">
                <div class="col-span-1 flex">
                    <img class="rounded w-full"
                        src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c"
                        alt="">
                </div>
                <div class="mx-4 col-span-6 mx-2 text-md flex justify-center flex-col">
                    <p class="text-red-500">Baju Kemeja</p>
                    <p class="font-bold text-slate-500">1 pcs</p>
                </div>
            </div>
        </div>
        <div class="my-1 p-2 border rounded">
            <p class="text-xs text-slate-500 mb-1">Detail Pembayaran</p>
            <div class="flex justify-between text-xs">
                <p>
                    Total Pembayaran
                </p>
                <p class="font-bold text-green-500">
                    Rp 55.000
                </p>
            </div>
        </div>
        <div class="my-2">
            <button class="w-full text-md bg-blue-500 text-white rounded py-2">Konfirmasi Pemesanan</button>
        </div>
    </div>
@endsection

@section('dashboard_js')
@endsection
