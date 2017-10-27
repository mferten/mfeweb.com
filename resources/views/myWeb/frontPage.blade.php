@extends('layouts.master')

@push('header')
        {{-- Beginning of the Header section --}}
        <header>
            <h1>M.F.E Web Sites <span class="mfeOrange">In progress</span></h1>
            <h2>
                <img class="plainFlags vertialAlignMiddle center mfeSmall"
                    src="images/smallFlags/UnitedStatesofAmerica.png"
                    alt="United States of America">
                <img class="plainFlags vertialAlignMiddle center mfeSmall"
                    src="images/smallFlags/Turkey.png"
                    alt="Turkey">
                <img class="plainFlags vertialAlignMiddle center mfeSmall"
                    src="images/smallFlags/Slovakia.png"
                    alt="Slovakia">
            </h2>
        </header>
@endpush

@push('module')
        {{-- Beginning of the My Sites Link List --}}
        <div class="row loginBP">
            <nav class="frontPageMarginLeft">
                <ul class="inputTopMargin ulListStyle">
                    <li>
                        <a href="http://www.mfeworld.com/" target="_blank">Flags [Dogs:Birds:Flowers]
                            <span class="mfe">*1</span></a>
                    </li>
                    <li>
                        <a href="http://www.mywebbench.com/" target="_blank">My Web Bench
                            <span class="mfe">*1</span></a>
                    </li>
                    <li class="marginLiBottom">
                        <a href="http://www.mfework.com/" target="_blank">My Resorts & Villas
                            <span class="mfeOrange">*2</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfeweb.com/mail" target="_blank">MFE Mail</a>
                    </li>
                    <li class="marginLiBottom">
                        <a href="https://github.com/mferten" target="_blank">MFE GitHub</a>
                    </li>
                </ul>
            </nav>
            <div class="inputTopMargin">
                <p class="floatingInput"><span class="mfe">*1&nbsp;</span>
                    <span class="mfeMedium">-Laravel/Elequent(ORM)/Ajax</span>
                    <span class="mfeSmall">Within CentOS 7 Linux, Apache Web and iRedMail Mail Servers</span>
                </p>
                <p class="floatingRightInput"><span class="mfeOrange">*2&nbsp;</span>
                    <span class="mfeMedium">-JHipster/Spring MVC/Hibernate/JPA2(ORM)/Ajax</span>
                    <span class="mfeSmall">Under Construction</span>
                </p>
            </div>
        </div>
@endpush

@push('jsFiles')

@endpush
