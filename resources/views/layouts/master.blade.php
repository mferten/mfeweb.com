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
                <a href="images/programmingcertificate.png" target="_blank">
                    <img class="img16" src="images/programmingcertificate.png"
                        alt="MFE Harvard FAS DCE HES Programming Certificate"/>
                </a>
                <figcaption><span style='color:#f5b4b4'>Harvard:</span> Java, PHP, Spring MVC</figcaption>
            </figure>
            <figure style="display:inline-block">
                <a href="images/webtechnologiescertificate.png" target="_blank">
                    <img class="img16" src="images/webtechnologiescertificate.png"
                        alt="MFE Harvard FAS DCE HES Web Technologies Certificate"/>
                </a>
                <figcaption><span style='color:#f5b4b4'>Harvard:</span> HTML, CSS, JavaScript</figcaption>
            </figure>

            <p>
                <span class="superScript mfeSmall">*1&nbsp;</span>
                <span class="mfeMedium">-[Prototype] Laravel/Elequent(ORM)/Ajax</span>&nbsp;&nbsp;
                <span class="superScript mfeSmall">*2&nbsp;</span>
                <span class="mfeMedium">-Spring MVC/Hibernate/JPA2(ORM)</span>
                <span class="mfeSmall">To Be Constructed</span>
            </p>
            <ul class="ulListStyle">
                <li>
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
