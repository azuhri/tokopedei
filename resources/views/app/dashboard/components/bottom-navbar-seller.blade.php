<div class="w-full fixed z-[1000] left-0 bottom-0 flex justify-center">
    <div class="w-[600px] md:w-[500px] flex justify-around py-2 bg-slate-50 border-t-2 w-full">
        <a href="{{route("seller.home")}}" class="{{url()->current() == route('seller.home') ? "text-red-500 font-bold" : ""}} font-poppins hover:text-red-500 hover:font-bold flex flex-col justify-center items-center">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
        <p class="text-xs mt-1">Beranda</p>
        </a>
        <a href="{{route("seller.product")}}" class="{{strpos(url()->current(),"product") !== false ? "text-red-500 font-bold" : ""}} font-poppins hover:text-red-500 flex flex-col justify-center items-center">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
        <p class="text-xs mt-1">Produk</p>
        </a>
        <a href="{{route('seller.order')}}" class="relative {{strpos(url()->current(),"order") !== false ? "text-red-500 font-bold" : ""}} font-poppins hover:text-red-500 flex flex-col justify-center items-center">
            <p id="counterNotif" class="text-xl font-bold text-red-500 absolute right-3 bottom-7"></p>
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg>
        <p class="text-xs mt-1">Pesanan</p>
        </a>
        <a href="{{route('seller.profile.view')}}" class="{{url()->current() == route('seller.profile.view') ? "text-red-500 font-bold" : ""}} font-poppins hover:text-red-500 flex flex-col justify-center items-center">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        <p class="text-xs mt-1">Profil</p>
        </a>
    </div>
</div>