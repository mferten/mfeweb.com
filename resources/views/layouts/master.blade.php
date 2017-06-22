@stack('logic')
<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- Head: meta, title, link, script statements -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        {{-- css files --}}
        <link rel="stylesheet" href="css/cssStyle.css">
        {{-- Google Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
        <!-- require_once("phpfile/require/headTags.php") -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="PHP/Laravel">
        <meta name="keywords" content="MFE Sites by Mehmet F Erten">
        <meta name="author" content="Mehmet Fatih Erten">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title', 'MFE Sites')
        </title>

    </head>

    <body>

        @stack('header')

        @stack('module')

        <footer class="center">
            <span>&copy; {{ date('Y') }} <span class="mfe">M</span>.<span class="mfe">F</span>.<span class="mfe">E</span>. Sites by Mehmet F Erten</span>
            <br/>
        </footer>

        @stack('jsFiles')

    </body>

</html>