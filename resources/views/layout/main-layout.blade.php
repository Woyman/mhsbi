<!DOCTYPE html>
<html lang="en">

<head>
    <title>mhsbi.com</title>
    @include('layout.meta-header')
    @include('layout.css-header')

</head>

<body> 
@include('layout.header-menu')    
@yield('content')

@include('layout.footer-content')
@include('layout.js-assets')
</body>

</html>