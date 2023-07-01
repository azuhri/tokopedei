@extends('app.dashboard.template')
@section('dashboard_title')
    Daftar Produk
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <div class="my-2">
            <div class="flex justify-between">
                <p class="font-bold text-sm">Katalog Produk</p>
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
                        <a href="{{route('catalog.view.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
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
                        <a href="{{route('catalog.view.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
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
                        <a href="{{route('catalog.view.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
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
                        <a href="{{route('catalog.view.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
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
                        <a href="{{route('catalog.view.detail',1)}}" class="py-2 rounded text-center border font-bold border-red-600 text-red-600 text-white w-full">
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
       
    </div>
@endsection

@section('dashboard_js')

@endsection
