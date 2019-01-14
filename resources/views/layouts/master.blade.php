@stack('logic')
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head: meta, title, link, script statements -->
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        {{-- css files --}}
        <link rel="stylesheet" href="css/cssStyle.css">
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
            <h3 class='harvard'>Harvard (HES) Graduate Certificates</h3>
            <figure>
                <figcaption><p>Programming</p></figcaption>
                <a href="images/programmingcertificate.png" target="_blank">
                    <img class="img10 aPng" src="images/programmingcertificate.png"
                        alt="MFE Harvard FAS DCE HES Programming Certificate"/>
                </a>
            </figure>
            <figure>
                <figcaption><p>Web Technologies</p></figcaption>
                <a href="images/webtechnologiescertificate.png" target="_blank">
                    <img class="img10 aPng" src="images/webtechnologiescertificate.png"
                        alt="MFE Harvard FAS DCE HES Web Technologies Certificate"/>
                </a>
            </figure>

            <ul class="ulListStyle">
                <li>
                    <a href="https://github.com/mferten" target="_blank">&nbsp;<span class="harvardThree">GitHub&nbsp;</span></a>
                    <a href="https://www.mfeweb.com/mail" target="_blank">&nbsp;<span class="harvardThree">Mail&nbsp;</span></a>
                </li>
            </ul>
            <img src='https://www.mfeweb.com/images/comodo_secure_seal_76x26_transp.png' alt="Comodo"/>
            <p>&copy; {{ date('Y') }} Mehmet F Erten</p>
            </footer>
        @stack('jsFiles')
        </script>
    </body>
</html>
