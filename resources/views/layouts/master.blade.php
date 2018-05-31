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
            <figure style="display:inline-block">
                <figcaption><p class='harvard'>Harvard Programming Graduate Certificate</p></figcaption>
                <a href="images/programmingcertificate.png" target="_blank">
                    <img class="img10  aPng" src="images/programmingcertificate.png"
                        alt="MFE Harvard FAS DCE HES Programming Certificate"/>
                </a>
            </figure>
            <figure style="display:inline-block">
                <figcaption><p class='harvard'>Harvard Web Technologies Graduate Certificate</p></figcaption>
                <a href="images/webtechnologiescertificate.png" target="_blank">
                    <img class="img10  aPng" src="images/webtechnologiescertificate.png"
                        alt="MFE Harvard FAS DCE HES Web Technologies Certificate"/>
                </a>
            </figure>

            <ul class="ulListStyle">
                <li>
                    <a href="http://www.mfework.com" target="_blank">&nbsp;Vegan&nbsp;</a>
                    <a href="http://www.mywebbench.com" target="_blank">&nbsp;USVI&nbsp;</a>
                    <a href="http://www.mfeworld.com/citations" target="_blank">&nbsp;Citations&nbsp;</a>
                    <a href="https://github.com/mferten" target="_blank">&nbsp;GitHub&nbsp;</a>
                    <a href="https://www.mfeweb.com/mail" target="_blank">&nbsp;Mail&nbsp;</a>
                </li>
            </ul>
            <span>&copy; {{ date('Y') }} Mehmet F Erten</span>
        </footer>
        @stack('jsFiles')
    </body>
</html>
