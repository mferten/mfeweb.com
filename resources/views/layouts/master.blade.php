@stack('logic')
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head: meta, title, link, script statements -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        {{-- css files --}}
        <link rel="stylesheet" href="css/cssStyle007.css">
        {{-- Google Fonts --}}
        <!-- require_once("phpfile/require/headTags.php") -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MFE Web Sites">
        <meta name="keywords" content="MFE Web Sites by Mehmet F Erten">
        <meta name="author" content="Mehmet Fatih Erten">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- Title --}}
        <title>@yield('title', 'MFE Web Sites')</title>
    </head>
    <body class="gridBox">
        {{-- header --}}
        @stack('header')
        {{-- module --}}
        @stack('module')
        {{-- footer --}}
        <footer>
            <ul class="ulListStyle">
                <li>
                    <a href="https://github.com/mferten" target="_blank"><span class="harvardThree">GitHub</span></a>
                    <a href="https://www.mfeweb.com/mail" target="_blank"><span class="harvardThree">Mail</span></a>
                </li>
            </ul>
            <img src='https://www.mfeweb.com/images/comodo_secure_seal_76x26_transp.png' alt="Comodo"/>
            <p>&copy; {{ date('Y') }} Mehmet F Erten</p>
        </footer>
        @stack('jsFiles')
    </body>
</html>
