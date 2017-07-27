@include('layouts.header')
<div id="wrapper">
    @include('layouts.side-bar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('layouts.header-nav')
        @yield('content')
    </div>
</div>

@include('layouts.footer')