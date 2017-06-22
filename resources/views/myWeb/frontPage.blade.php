@extends('layouts.master')

@push('header')
    <header>
        <br/><br/>
        <h1><span class="mfe">M</span>.<span class="mfe">F</span>.<span class="mfe">E</span> Sites</h1>
        <h2><span class="mfe">M</span>ehmet <span class="mfe">F</span>atih <span class="mfe">E</span>rten Sites</h2>
    </header>
@endpush

@push('module')
    {{-- Beginning of the Flag Selection; --}}
    <br/><br/>
    <div id="rowID " class="row loginBP center">
        <ul class="katakanaIroha">
            <li>
                <a href="http://www.mfeworld.com/" target="_blank"><span class="papayaBackground">Flags (to be: or Birds or Flowers or Foods)</span></a>
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
        <div id="flags">
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
    </div>
@endpush

@push('jsFiles')

@endpush
