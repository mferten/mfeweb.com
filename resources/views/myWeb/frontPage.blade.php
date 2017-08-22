@extends('layouts.master')

@push('header')
        {{-- Beginning of the Header section --}}
        <header>
            <br/><br/>
            <h1><span class="mfe">M</span>.<span class="mfe">F</span>.<span class="mfe">E</span> Sites
            <div id="flags" class="center">
                <img id="flag21" class="plainFlags vertialAlignMiddle"
                    src="images/smallFlags/UnitedStatesofAmerica.png"
                    alt="United States of America">
                <img id="flag21" class="plainFlags vertialAlignMiddle"
                    src="images/smallFlags/Turkey.png"
                    alt="Turkey">
                <img id="flag21" class="plainFlags vertialAlignMiddle"
                    src="images/smallFlags/Slovakia.png"
                    alt="Slovakia">
            </div>
            </h1>
        </header>
@endpush

@push('module')
        {{-- Beginning of the My Sites Link List --}}
        <div class="row loginBP">
            <div class="frontPageMarginLeft">
                <br/>
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.mfeworld.com/" target="_blank">Flags (Dogs, Birds and Flowers..)</a>
                    </li>
                    <br/>
                    <li>
                        <a href="http://www.mywebbench.com/" target="_blank">My Web Bench</a>
                    </li>
                    <br/>
                    <li>
                        <a href="http://www.mfeweb.com/mail" target="_blank">MFE Mail</a>
                    </li>
                    <br/>
                    <li>
                        <a href="https://github.com/mferten" target="_blank">MFE GitHub</a>
                    </li>
                </ul>
                <br/><br/><br/><br/>
            </div>
        </div>
@endpush

@push('jsFiles')

@endpush
