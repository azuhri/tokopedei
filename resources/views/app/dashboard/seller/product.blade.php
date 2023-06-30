@extends('app.dashboard.template')
@section('dashboard_title')
    Daftar Produk
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <div class="fixed bottom-20 right-10">
            <a href="{{route('seller.product.create')}}" class="p-2 text-white rounded-full bg-red-400 shadow-lg border flex">
                <svg viewBox="0 0 24 24" width="35" height="35" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
            </a>
        </div>
        <div class="my-2">
            <div class="flex justify-between">
                <p class="font-bold text-sm">Katalog Produk Anda</p>
                <select class="bg-transparent text-right text-sm" name="" id="">
                    <option value="All">Filter</option>
                    <option value="termurah">Termurah</option>
                    <option value="termahal">Termahal</option>
                    <option value="terdisukai">Terdisukai</option>
                </select>
            </div>
        </div>
        <div class="my-2">
            <input type="text" class="w-full rounded-lg border-2 border-gray-400 p-1 px-2 placeholder:text-xs shadow text-sm text-gray-500 focus:outline-0" placeholder="Cari nama produk disini...">
        </div>
        <div class="p-2 grid grid-cols-2 mb-32">
            <div class="col-span-1 flex flex-col shadow m-1">
                <div class="rounded">
                    <img class="rounded-t-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                </div>
                <div class="text-xs p-2 bg-slate-50 shadow border rouned-b-lg">
                    <p class="text-center mb-1">
                        <small class="text-muted text-center w-full">❤️ 26 orang suka ini</small>
                    </p>
                    <p class="font-bold">Baju Kemeja</p>
                    <p class="font-bold text-green-500">Rp 55.000</p>
                    <div class="w-full flex my-2 rounded">
                        <a href="{{route('seller.product.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
                            Detail
                        </a>
                        <button class="flex flex-col items-center font-bold bg-red-600 text-white px-4 ml-1 rounded">
                            <small>stok:</small>
                            <span class="font-bold text-white">10</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col shadow m-1">
                <div class="rounded">
                    <img class="rounded-t-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                </div>
                <div class="text-xs p-2 bg-slate-50 shadow border rouned-b-lg">
                    <p class="text-center mb-1">
                        <small class="text-muted text-center w-full">❤️ 26 orang suka ini</small>
                    </p>
                    <p class="font-bold">Baju Kemeja</p>
                    <p class="font-bold text-green-500">Rp 55.000</p>
                    <div class="w-full flex my-2 rounded">
                        <a href="{{route('seller.product.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
                            Detail
                        </a>
                        <button class="flex flex-col items-center font-bold bg-red-600 text-white px-4 ml-1 rounded">
                            <small>stok:</small>
                            <span class="font-bold text-white">10</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col shadow m-1">
                <div class="rounded">
                    <img class="rounded-t-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                </div>
                <div class="text-xs p-2 bg-slate-50 shadow border rouned-b-lg">
                    <p class="text-center mb-1">
                        <small class="text-muted text-center w-full">❤️ 26 orang suka ini</small>
                    </p>
                    <p class="font-bold">Baju Kemeja</p>
                    <p class="font-bold text-green-500">Rp 55.000</p>
                    <div class="w-full flex my-2 rounded">
                        <a href="{{route('seller.product.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
                            Detail
                        </a>
                        <button class="flex flex-col items-center font-bold bg-red-600 text-white px-4 ml-1 rounded">
                            <small>stok:</small>
                            <span class="font-bold text-white">10</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col shadow m-1">
                <div class="rounded">
                    <img class="rounded-t-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                </div>
                <div class="text-xs p-2 bg-slate-50 shadow border rouned-b-lg">
                    <p class="text-center mb-1">
                        <small class="text-muted text-center w-full">❤️ 26 orang suka ini</small>
                    </p>
                    <p class="font-bold">Baju Kemeja</p>
                    <p class="font-bold text-green-500">Rp 55.000</p>
                    <div class="w-full flex my-2 rounded">
                        <a href="{{route('seller.product.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
                            Detail
                        </a>
                        <button class="flex flex-col items-center font-bold bg-red-600 text-white px-4 ml-1 rounded">
                            <small>stok:</small>
                            <span class="font-bold text-white">10</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-1 flex flex-col shadow m-1">
                <div class="rounded">
                    <img class="rounded-t-lg" src="https://down-id.img.susercontent.com/file/91394fe79bdb6f3398857ae64a14fd3c" alt="">
                </div>
                <div class="text-xs p-2 bg-slate-50 shadow border rouned-b-lg">
                    <p class="text-center mb-1">
                        <small class="text-muted text-center w-full">❤️ 26 orang suka ini</small>
                    </p>
                    <p class="font-bold">Baju Kemeja</p>
                    <p class="font-bold text-green-500">Rp 55.000</p>
                    <div class="w-full flex my-2 rounded">
                        <a href="{{route('seller.product.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
                            Detail
                        </a>
                        <button class="flex flex-col items-center font-bold bg-red-600 text-white px-4 ml-1 rounded">
                            <small>stok:</small>
                            <span class="font-bold text-white">10</span>
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <div class="flex items-center mb-4">
            <div class="w-1/2">
                <p class="font-bold mb-1 text-sm">User1</p>
                <p class="text-xs text-center px-2 py-1 w-[70px] bg-red-500 rounded text-white font-bold">
                    Seller
                </p>
            </div>
            <div class="w-1/2 flex justify-end">
                <div class="bg-slate-100 border-[2px] p-2 drop-shadow-md w-1/3 rounded-full">
                    <a href="{{route('seller.product.detail',1)}}">
                        <img class="" src="{{ asset('assets/image/user.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="my-4 p-4 rounded-md border-[1px] drop-shadow-md mb-[100px]">
            <div class="text-xs">
                <p class="font-bold text-sm border bg-red-500 text-red-100 text-center text-white py-2 shadow-md rounded-md mb-4">Rangkuman
                    Data</p>
                <div class="flex justify-between">
                    <div class="mx-[1px] w-full relative">
                        <div
                            class="flex flex-col justify-center rounded-md items-center p-4 border border-red-700 text-red-500 text-yellow-500 text-white">
                            <div class="p-[1px] absolute left-1 top-1 rounded-full w-12 bg-red-500 flex justify-center">
                                <svg viewBox="0 0 24 24" width="12" height="12" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                            </div>
                            <p class="text-sm font-bold mt-2 text-center text-red-500 font-bold">Total Produk</p>
                            <span class="text-3xl font-bold font-poppins right-4 top-8 text-red-700">5</span>
                        </div>
                    </div>
                    <div class="mx-[1px] w-full relative">
                        <div
                            class="flex flex-col justify-center rounded-md items-center p-4 border border-red-700 text-red-500 text-yellow-500 text-white">
                            <div class="p-[1px] absolute left-1 top-1 rounded-full w-12 bg-red-500 flex justify-center">
                              <svg viewBox="0 0 24 24" width="12" height="12" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <p class="text-sm font-bold mt-2 text-center text-red-500 font-bold">Total Penjualan</p>
                            <span class="text-3xl font-bold font-poppins right-4 top-8 text-red-700">10</span>
                        </div>
                    </div>
                </div>
                <div class="mx-[1px] mt-1 w-full relative">
                    <div
                        class="flex flex-col justify-center rounded-md items-center p-4 border border-red-700 text-red-500 text-yellow-500 text-white">
                        <div class="p-[1px] absolute left-1 top-1 rounded-full w-12 bg-red-500 flex justify-center">
                            <svg viewBox="0 0 24 24" width="12" height="12" stroke="white" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <p class="text-sm font-bold mt-2 text-center text-red-500 font-bold">Total Pendapatan</p>
                        <span class="text-3xl font-bold font-poppins right-4 top-8 text-red-700">Rp 15.350.000</span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

@section('dashboard_js')

@endsection
