<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <meta name="author" content="Devcrud">
    <title>Ashraf Ahmed | Web Application Developer</title>
    {{-- FONT ICONS--}}
   
    <link rel="stylesheet" href="{{asset('assets/vendors')}}/themify-icons/css/themify-icons.css">
    {{-- Bootstrap and Meyawo Styles--}}
    <link rel="stylesheet" href="{{asset('assets/css')}}/meyawo.css">
    

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

@include('components.nav')
@include('components.header')

@yield('content')

    
@include('components.footer')
{{-- CORE SECTION ENDS  --}}
    
<script src=" {{asset('assets/vendors')}}/jquery/jquery-3.4.1.js"></script>
    <script src=" {{asset('assets/vendors')}}/bootstrap/bootstrap.bundle.js"></script>

    {{--BOOTSTRAP 3 AFFIXATION--}}
    <script src=" {{asset('assets/vendors')}}/bootstrap/bootstrap.affix.js"></script>

    {{-- Meyawo js --}}
    <script src="{{asset('assets/js')}}/meyawo.js"></script>
</body>

</html>