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
            <span>&copy; {{ date('Y') }} Mehmet F Erten</span>
            <article>
                <h3>
                    <figure style="display:inline-block">
                        <a href="images/programmingcertificate.png" target="_blank">
                            <img src="images/programmingcertificate.png"
                                alt="MFE Harvard FAS DCE HES Programming Certificate"/>
                        </a>
                        <figcaption>Java</figcaption>
                    </figure>
                    <figure style="display:inline-block">
                        <a href="images/webtechnologiescertificate.png" target="_blank">
                            <img src="images/webtechnologiescertificate.png"
                                alt="MFE Harvard FAS DCE HES Web Technologies Certificate"/>
                        </a>
                        <figcaption>HTML, CSS, JS, PHP, Spring MVC</figcaption>
                    </figure>
                </h3>
            </article>
        </footer>
        @stack('jsFiles')
    </body>
</html>
