<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mhsbi.com</title>
    @include('layout.meta-header')
    @include('layout.css-header')

</head>

<body> 
@include('layout.header-menu')    
@yield('content')


@include('layout.js-assets')
</body>

</html>