@extends('app.dashboard.template')
@section('dashboard_title')
    Profil Akun
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <form action="{{route('seller.profile.update')}}" method="POST">
            @csrf
            @if (session("success"))
                <p class="bg-green-600 text-white p-2 rounded text-center text-sm">{{session("success")}}</p>
            @endif
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Nama</label>
                <input name="name" value="{{Auth::user()->name}}" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan nama Anda...">
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Email</label>
                <input name="email" value="{{Auth::user()->email}}" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="email" placeholder="Masukan email Anda...">
            </div>
            <button class="bg-blue-500 w-full text-white py-2 rounded">Simpan</button>
        </form>
        <button onclick="logoutUser();" class="bg-red-500 w-full text-white py-2 rounded my-2">Logout</button>
        <form class="hidden" action="{{route('logout')}}" method="POST" id="logoutForm">
            @csrf
        </form>
    </div>
@endsection

@section('dashboard_js')
<script>
    const logoutUser = () => {
        let confirmation = confirm("Apakah Anda mau logout?");
        if(confirmation) {
            let form = document.getElementById("logoutForm");
            form.submit();
        }
    }
</script>
@endsection
