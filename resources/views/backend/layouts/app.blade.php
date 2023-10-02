<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('title') </title>
    @include("backend.layouts.link-css")
    @yield('style')
</head>
<body>
<div class="wrapper">
    @include('backend.layouts.partials.siteber')
    @include('backend.layouts.partials.header')
    <div class="page-wrapper">
        <div class="page-content">
            @yield('content')
        </div>
    </div>
{{--    @include('backend.layouts.partials.footer')--}}
</div>
@include('backend.layouts.partials.theme-customizer')
@include('backend.layouts.link-js')
@yield('script')
</body>
</html>
















