<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
    <title>mhsbi.com</title>
    @include('layout.meta-header')
    @include('layout.css-header')
    @stack('scripts')

</head>

<body> 
@include('layout.header-menu')    
@yield('content')

@include('layout.footer-content')
@include('layout.js-assets')
</body>

</html>