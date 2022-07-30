<!DOCTYPE html>
<html lang="en">

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