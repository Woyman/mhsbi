<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
    <title>Aini & Hasbi Wedding Invitation</title>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" data-pagespeed-no-defer></script>    
    @include('layout.wedding.meta-header')
    @include('layout.wedding.css-header')

    

    

</head>

<body style="background-color: #bcd1da"> 
@include('layout.wedding.header-menu')    
@yield('content')

@include('layout.wedding.footer-content')
@include('layout.wedding.js-assets')

@yield('js-content')

@stack('scripts')
</body>

</html>