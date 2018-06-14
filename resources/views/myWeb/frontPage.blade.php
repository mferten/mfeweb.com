@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1><abbr title="Mehmet F Erten: Mehmet Fatih Erten"> M.F.E</abbr> Web Sites</h1>
            <h2 class='harvard'>Harvard
                <abbr title="Faculty of Arts and Sciences"> FAS</abbr>
                <abbr title="Division of Continuing Education"> DCE</abbr>
                <abbr title="Harvard Extension School"> HES</abbr>
                <abbr title="Digital Media Design"> DMD</abbr>
                <abbr title="Master of Liberal Arts"> ALM</abbr>
                <abbr title="Completion by December 2018, Graduation by March 2019 and Commencement by May 2019"> 2019</abbr></h2>
            <figure id="master">
                <a href="images/programmingcertificate.png" target="_blank">
                    <img class="img14 aPng" src="images/programmingcertificate.png"
                        alt="MFE Harvard Digital Media Design ALM"/>
                </a>
            </figure>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <nav id="menu">
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.mfeworld.com/" target="_blank">
                            World Flags & Countries: Discover
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mfeworld.com/fill" target="_blank">
                            Fill the Map with The Flags
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mfeworld.com/fix" target="_blank">
                            Fix the Mixed Flags
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com:8080" target="_blank">
                            Flags Trivia
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- User Opinion -->
            <figure id="emailBox" class="displayNone">
                <img id="sendButton" class="threeRems" src="images/sendMail.jpg" alt="Send" title="Send your eMail"/>
                <img id="clearButton" class="threeRems" src="images/clear.jpg" alt="Clear" title="Clear your eMail"/>
                <img id="returnButton" class="threeRems" src="images/return.jpg" alt="Return" title="Return to Main Page"/>
                <form id="SendMailModule" method="post">
                    <label for="mailText" class='harvard'>Please Enter Your Opinion</label>
                    <textarea class="img20 aPng" id="mailText" rows="15" cols="50"></textarea>
                    <p id="mailTextError" class="error"></p>
                </form>
            </figure>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
