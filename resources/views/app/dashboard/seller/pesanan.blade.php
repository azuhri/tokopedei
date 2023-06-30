@extends('app.dashboard.template')
@section('dashboard_title')
    Daftar Pesanan
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <p class="text-xl text-gray-500">Pesanan</p>
        <div class="overflow-x-scroll py-2 shadow rounded my-1">
            <div class="w-[700px]">
                <button class="bg-red-500 text-white text-xs mx-2 border p-1 px-2 rounded-lg">
                    Semua Pesanan
                </button>
                <button class="text-xs mx-2 border p-1 px-2 rounded-lg">
                    Pesanan Masuk
                </button>
                <button class="text-xs mx-2 border p-1 px-2 rounded-lg">
                    Pesanan Diproses
                </button>
                <button class="text-xs mx-2 border p-1 px-2 rounded-lg">
                    Pesanan Ditolak
                </button>
                <button class="text-xs mx-2 border p-1 px-2 rounded-lg">
                    Pesanan Selesai
                </button>
            </div>
        </div>
        <div class="flex flex-col mb-32">
            <div class="my-2 p-2 shadow border rounded-md">
                <div class="text-xs flex items-center justify-between">
                    <div class="flex flex-col">
                        <small>16/03/2023 | 08:53</small>
                        <p>Azis Zuhri Pratomo</p>
                    </div>
                    <small class="rounded-lg bg-gray-400 p-1 px-4 text-xs text-white">Pesanan Baru</small>
                </div>
                <div class="py-2 border-2 p-2 my-2 rounded ">
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
                <div class="flex justify-between">
                    <div class="text-sm">
                        <p class="">Total Harga</p>
                        <p class="font-bold text-red-500">Rp. 55.000</p>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-xs">Kode Pesanan</p>
                        <p class="text-sm font-bold text-red-500">#TK-202303-0853Y</p>
                    </div>
                </div>
                <a class="text-sm bg-red-500 w-full flex text-center justify-center py-2 mt-2 rounded text-white font-bold"
                    href="{{route('seller.order.detail',10)}}">Detail Pesanan</a>
            </div>
            <div class="my-2 p-2 shadow border rounded-md">
                <div class="text-xs flex items-center justify-between">
                    <div class="flex flex-col">
                        <small>16/03/2023 | 08:53</small>
                        <p>Azis Zuhri Pratomo</p>
                    </div>
                    <small class="rounded-lg bg-gray-400 p-1 px-4 text-xs text-white">Pesanan Baru</small>
                </div>
                <div class="py-2 border-2 p-2 my-2 rounded ">
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
                <div class="flex justify-between">
                    <div class="text-sm">
                        <p class="">Total Harga</p>
                        <p class="font-bold text-red-500">Rp. 55.000</p>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-xs">Kode Pesanan</p>
                        <p class="text-sm font-bold text-red-500">#TK-202303-0853Y</p>
                    </div>
                </div>
                <a class="text-sm bg-red-500 w-full flex text-center justify-center py-2 mt-2 rounded text-white font-bold"
                    href="{{route('seller.order.detail',10)}}">Detail Pesanan</a>
            </div>
            <div class="my-2 p-2 shadow border rounded-md">
                <div class="text-xs flex items-center justify-between">
                    <div class="flex flex-col">
                        <small>16/03/2023 | 08:53</small>
                        <p>Azis Zuhri Pratomo</p>
                    </div>
                    <small class="rounded-lg bg-gray-400 p-1 px-4 text-xs text-white">Pesanan Baru</small>
                </div>
                <div class="py-2 border-2 p-2 my-2 rounded ">
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
                <div class="flex justify-between">
                    <div class="text-sm">
                        <p class="">Total Harga</p>
                        <p class="font-bold text-red-500">Rp. 55.000</p>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-xs">Kode Pesanan</p>
                        <p class="text-sm font-bold text-red-500">#TK-202303-0853Y</p>
                    </div>
                </div>
                <a class="text-sm bg-red-500 w-full flex text-center justify-center py-2 mt-2 rounded text-white font-bold"
                    href="{{route('seller.order.detail',10)}}">Detail Pesanan</a>
            </div>
            <div class="my-2 p-2 shadow border rounded-md">
                <div class="text-xs flex items-center justify-between">
                    <div class="flex flex-col">
                        <small>16/03/2023 | 08:53</small>
                        <p>Azis Zuhri Pratomo</p>
                    </div>
                    <small class="rounded-lg bg-gray-400 p-1 px-4 text-xs text-white">Pesanan Baru</small>
                </div>
                <div class="py-2 border-2 p-2 my-2 rounded ">
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
                <div class="flex justify-between">
                    <div class="text-sm">
                        <p class="">Total Harga</p>
                        <p class="font-bold text-red-500">Rp. 55.000</p>
                    </div>
                    <div class="flex flex-col justify-center">
                        <p class="text-xs">Kode Pesanan</p>
                        <p class="text-sm font-bold text-red-500">#TK-202303-0853Y</p>
                    </div>
                </div>
                <a class="text-sm bg-red-500 w-full flex text-center justify-center py-2 mt-2 rounded text-white font-bold"
                    href="{{route('seller.order.detail',10)}}">Detail Pesanan</a>
            </div>
        </div>
    </div>
@endsection

@section('dashboard_js')
@endsection
