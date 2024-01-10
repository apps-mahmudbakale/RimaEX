<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title> @yield('title')- Rima Agricultural Commodity Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Rima Agricultural Commodity Exchange">
    <meta name="author" content="Mahmud Bakale">
    <meta name="description" content="Agricultural Commodity Exchange">
    <meta name="keywords" content="Commodity Exchange, Rima, Agricultural Exchange, Mahmud Bakale" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/summernote.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    @livewireStyles
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        @if (request()->is('email/verify'))
        @else
            @include('partials.sidebar')
        @endif
        <div class="main">
            @include('partials.menu')
            @yield('content')
            @include('partials.foot')
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>
    {{-- <script src="{{asset('js/quill.js')}}"></script> --}}
    <script src="{{ asset('js/summernote.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    @livewireScripts
    <script>
        // var quill = new Quill('#editor', {
        //   theme: 'snow'
        // });
        $(document).ready(function() {
            $('#summernote').summernote();
        });

        window.addEventListener('openBuyModal', function() {
            $('#defaultModalPrimary').modal('show');
        });
        window.addEventListener('openSellModal', function() {
            $('#defaultModalPrimary2').modal('show');
        });
        
    </script>
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <script>
        @if (session()->has('success'))
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session()->get('success') }}',
                showConfirmButton: true,
                timer: 2500
            })
            @elseif(session()->has('error'))
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session()->get('error') }}',
                showConfirmButton: true,
                timer: 5500
            })
        @endif
    </script>
</body>

</html>
