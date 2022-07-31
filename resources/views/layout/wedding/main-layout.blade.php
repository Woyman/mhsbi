<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
    <title>Aini & Hasbi Wedding Invitation</title>
    @include('layout.wedding.meta-header')
    @include('layout.wedding.css-header')

</head>

<body> 
@include('layout.wedding.header-menu')    
@yield('content')

@include('layout.wedding.footer-content')
@include('layout.wedding.js-assets')

@yield('js-content')
</body>

</html>