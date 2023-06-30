@extends('app.template.mobile')
@section('title')
    @yield('dashboard_title')
@endsection
@section('css')
    @yield('dashboard_css')
@endsection
@section('content')
    <div class="min-h-[100vh] relative">
        @if (strpos(url()->current(), 'customer/catalog') !== false)
            <div class="relative border-b-2 font-poppins shadow relative w-full text-center py-1 bg-red-900 text-white font-bold">
                @yield('back')
                <span class="font-bold text-sm">Tokopedei</span>
                <div class="absolute right-5 top-1">
                    <a class="flex" href="">
                        <svg viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        <span class="text-[10px] ml-[0.5px]">0</span>
                    </a>
                </div>
            </div>
        @else
            <div class="border-b-2 font-poppins shadow relative w-full text-center py-1 bg-red-900 text-white font-bold">
                @yield('back')
                <span class="font-bold text-sm">Tokopedei</span>
            </div>
        @endif
        <div class="p-4 font-poppins">
            @yield('dashboard_content')
        </div>
        @if (strpos(url()->current(), 'customer/catalog') === false)
            @include('app.dashboard.components.bottom-navbar-seller')
        @endif
        {{-- @if (Auth::user()->isFireman())
            @if (!Auth::user()->isNullLatLong())
            @endif
        @else
            @include('app.dashboard.components.bottom-navbar-user')
        @endif --}}
    </div>
@endsection

@section('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        });
    </script>
    @yield('dashboard_js')
@endsection
