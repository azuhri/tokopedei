@extends('app.dashboard.template')
@section('dashboard_title')
    Profil Akun
@endsection
@section('dashboard_css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
@endsection
@section('dashboard_content')
    <div class="h-full">
        <form action="">
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Nama</label>
                <input value="User1" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan nama Anda...">
            </div>
            <div class="py-2 flex flex-col">
                <label class="text-gray-500" for="product_name">Email</label>
                <input value="user1@gmail.com" class="border p-1 rounded border-slate-200 bg-transparent placeholder:text-sm text-md focus:outline-0 shadow" type="text" placeholder="Masukan email Anda...">
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
