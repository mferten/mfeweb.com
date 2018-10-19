@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1><abbr title="Mehmet F Erten: Mehmet Fatih Erten"> M.F.E</abbr> Web Sites</h1>
            <h2 class='harvard'>Harvard
                <abbr title="Master of Liberal Arts"> ALM</abbr>
                <abbr title="Digital Media Design"> DMD</abbr>
                <abbr title="Faculty of Arts and Sciences (FAS)
                             Division of Continuing Education (DCE)
                             Harvard Extension School (HES)
                             Completion by December 2018, Graduation by March 2019 and Commencement by May 2019"> 2019</abbr></h2>
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
                            World Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com/dashBoard/" target="_blank">
                            World Dashboard Search
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com/quizMe/" target="_blank">
                            World Dashboard Quizzes (wip)
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com:8080/world-dashboard/countries" target="_blank">
                            World Dashboard Control Center (Java: wip)
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">
                            Why am I a Vegan?
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mywebbench.com/" target="_blank">
                            An American Wakanda!
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- User Opinion -->
            <figure id="emailBox" class="displayNone">
                <img id="sendButton" class="iconSize" src="images/sendMail.jpg" alt="Send" title="Send your eMail"/>
                <img id="clearButton" class="iconSize" src="images/clear.jpg" alt="Clear" title="Clear your eMail"/>
                <img id="returnButton" class="iconSize" src="images/return.jpg" alt="Return" title="Return to Main Page"/>
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
