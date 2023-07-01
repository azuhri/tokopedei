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
        <div class="flex justify-between absolute shadow-lg bottom-0 p-4 w-full border left-0">
            <div>
                <p class="text-xs text-gray-500">Total Pembayaran</p>
                <p class="text-lg text-green-600 font-bold">Rp 165.000</p>
            </div>
            <a class="bg-green-600 text-white text-xs flex items-center px-8 rounded font-bold shadow" href="#">
                Checkout
            </a>
        </div>
        <div class="px-2">
            <p class="font-bold text-md text-blue-700">Checkout</p>
        </div>
        <div class="flex flex-col">
            <div class="py-2 border-2 p-2 my-1 rounded ">
                <div class="grid grid-cols-7">
                    <div class="col-span-1 flex">
                        <img class="rounded w-full"
                            src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                    </div>
                    <div class="mx-4 col-span-4 mx-2 text-md flex justify-center flex-col">
                        <p class="font-bold text-xs">Toko Barokah</p>
                        <p class="font-bold text-red-500">Baju Kemeja</p>
                        <p class="text-green-500 font-bold text-slate-500">Rp. 55.000</p>
                    </div>
                    <div class="col-span-2 w-full flex justify-end items-center">
                        <div class="w-1/2 flex">
                            <img onclick="#" src="https://app.bakoelomah.com/icon/kurang-circle.svg"
                                class="cursor-pointer" alt="gambar">
                            <div class="h6 fw-bold px-3 m-0" data="1">
                                1
                            </div>
                            <img onclick="#" src="https://app.bakoelomah.com/icon/add-circle.svg" class="cursor-pointer"
                                alt="gambar">
                        </div>
                        <div class="w-1/2 flex justify-end">
                            <button class="text-red-500 border p-2 border-red-500 rounded">
                                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 border-2 p-2 my-1 rounded ">
                <div class="grid grid-cols-7">
                    <div class="col-span-1 flex">
                        <img class="rounded w-full"
                            src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                    </div>
                    <div class="mx-4 col-span-4 mx-2 text-md flex justify-center flex-col">
                        <p class="font-bold text-xs">Toko Indah</p>
                        <p class="font-bold text-red-500">Baju Kemeja</p>
                        <p class="text-green-500 font-bold text-slate-500">Rp. 55.000</p>
                    </div>
                    <div class="col-span-2 w-full flex justify-end items-center">
                        <div class="w-1/2 flex">
                            <img onclick="#" src="https://app.bakoelomah.com/icon/kurang-circle.svg"
                                class="cursor-pointer" alt="gambar">
                            <div class="h6 fw-bold px-3 m-0" data="1">
                                1
                            </div>
                            <img onclick="#" src="https://app.bakoelomah.com/icon/add-circle.svg" class="cursor-pointer"
                                alt="gambar">
                        </div>
                        <div class="w-1/2 flex justify-end">
                            <button class="text-red-500 border p-2 border-red-500 rounded">
                                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-2 border-2 p-2 my-2 rounded ">
                <div class="grid grid-cols-7">
                    <div class="col-span-1 flex">
                        <img class="rounded w-full"
                            src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                    </div>
                    <div class="mx-4 col-span-4 mx-2 text-md flex justify-center flex-col">
                        <p class="font-bold text-xs">Toko Palogada</p>
                        <p class="font-bold text-red-500">Baju Kemeja</p>
                        <p class="text-green-500 font-bold text-slate-500">Rp. 55.000</p>
                    </div>
                    <div class="col-span-2 w-full flex justify-end items-center">
                        <div class="w-1/2 flex">
                            <img onclick="#" src="https://app.bakoelomah.com/icon/kurang-circle.svg"
                                class="cursor-pointer" alt="gambar">
                            <div class="h6 fw-bold px-3 m-0" data="1">
                                1
                            </div>
                            <img onclick="#" src="https://app.bakoelomah.com/icon/add-circle.svg" class="cursor-pointer"
                                alt="gambar">
                        </div>
                        <div class="w-1/2 flex justify-end">
                            <button class="text-red-500 border p-2 border-red-500 rounded">
                                <svg viewBox="0 0 24 24" width="18" height="18" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dashboard_js')
@endsection
