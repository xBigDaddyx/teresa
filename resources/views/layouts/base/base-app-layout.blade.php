<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>{{ config('app.name') ?? 'Laravel' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="xBigDaddyx">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('storage/images/logo/teresa_logo.png') }}">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons -->
    <link rel="stylesheet" href="css/vendors.min.css" />
    <link rel="stylesheet" href="css/icon.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/it-business.css" />

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body data-mobile-nav-style="full-screen-menu" data-mobile-nav-bg-color="#252840">
    <x-base-header />
    {{ $slot }}

    <x-base-footer />

    <!-- javascript libraries -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/vendors.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
