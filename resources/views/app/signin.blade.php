@extends('app.template.mobile')
@section('title')
    Masuk
@endsection
@section('content')
    <div class="h-screen">
        <div class="h-full p-8 flex justify-center items-center flex-col">
            <h1 class="text-3xl mb-2 font-poppins font-extrabold w-full text-red-500">Masuk</h1>
            <p class="mb-4 text-center">Silahkan login di bawah untuk bisa menjual barang di <span class="font-bold text-red-500">Tokopedei</span></p>
            <div class="w-1/2 my-2">
                <div class="bg-slate-200 p-10 rounded-full">
                    <img src="{{asset('assets/image/shopping-card-svgrepo-com.png')}}" alt="">
                </div>
            </div>
            <form action="{{route('login.post')}}" method="post" class="w-full mb-4">
                @if(session("error"))
                    <p class="p-2 rounded bg-red-400 text-center font-bold text-white w-full my-2">{{session("error")}}</p>
                @endif
                @csrf
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-poppins" for="email">Email</label>
                    <input type="email" name="email" value="{{old("email")}}" required placeholder="Masukan email Anda" class="border border-slate-300 p-3 rounded-md">
                </div>
                <div class="flex flex-col mb-4">
                    <label class="mb-2 font-poppins" for="password">Password</label>
                    <input type="password" name="password" required placeholder="Masukan password Anda" class="border border-slate-300 p-3 rounded-md">
                </div>
                {{-- <a href="{{route('seller.home')}}" class="rounded-lg bg-red-500 flex justify-center text-center w-full py-3 text-white text-xl font-poppins">
                    Masuk
                </a> --}}
                <button class="rounded-lg bg-red-500	 text-center w-full py-3 text-white text-xl font-poppins">
                    Masuk
                </button>
                <p class="text-center text-sm my-2">Kamu belum daftar ? silahkan <a href="#" class="text-red-500 font-bold">buat akun</a></p>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script>
    // @if(session("success"))
    //     $.Toast("Pesan Notifikasi","{{session('success')}}", "success");
    // @endif
    // @if(session("errors"))
    //     $.Toast("Pesan Notifikasi","{{session('errors')}}", "error");
    // @endif
</script>
@endsection