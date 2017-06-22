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
                        <a href="http://www.mfeworld.com/" target="_blank"><span class="papayaBackground">Flags (to be =>) or Birds or Flowers or Foods</span></a>
                    </li>
                    <br/>
                    <li>
                        <a href="http://www.mywebbench.com/" target="_blank"><span class="papayaBackground">My Web Bench and Virtual Community</span></a>
                    </li>
                    <br/>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank"><span class="papayaBackground">One of a kind Resort or Villa</span></a>
                    </li>
                    <br/>
                    <li>
                        <a href="http://www.mfeweb.com/mail" target="_blank"><span class="papayaBackground">Work With MFE Mail</span></a>
                    </li>
                    <br/>
                    <li>
                        <a href="https://github.com/mferten" target="_blank"><span class="papayaBackground">MFE GitHub</span></a>
                    </li>
                </ul>
                <br/><br/><br/><br/>
            </div>
        </div>
@endpush

@push('jsFiles')

@endpush
