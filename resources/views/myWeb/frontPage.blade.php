@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1>M.F.E. Websites</h1>
            <img id="menuWorldView" src="/images/_world.png" alt="World View">
            <nav id="menu">
                <ul class="ulListStyle">
                    <li>
                        <a id="mainSite" href="http://www.k12k20.com" target="_blank">
                            <img class="flagAttributes aPng" src="images/Flag_of_UnitedStatesofAmerica.svg"
                                alt="USA-English"/>
                            Nice to Meet the World
                        </a>
                    </li>
                    <li>
                        <a href="http://www.k12k20tr.com" target="_blank">
                            <img class="flagAttributes aPng" src="images/Flag_of_Turkey.svg"
                                alt="Turkey"/>
                            Dünyamız ile Tanışalım
                        </a>
                    </li>
                    <li>
                        <a href="http://www.k12k20sk.com" target="_blank">
                            <img class="flagAttributes aPng" src="images/Flag_of_Slovakia.svg"
                                alt="Slovakia"/>
                            Krajiny sveta
                        </a>
                    </li>
                    <li id="worldCenter">
                        <a href="http://www.k12k20.com:8080/world-dashboard/" target="_blank">
                            Nice to Meet the World Center
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <h2 class='harvard harvardTwo'>
                <figure>
                    <figcaption>
                          <p>Harvard (HES) Master of Liberal Arts</p>
                          <p class="masterDGM"><a href="docs/Transcripts.pdf" target="_blank"> Digital Media Design GPA: 3.94</a></p>
                    </figcaption>
                </figure>
            </h2>
            <!-- User Opinion -->
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
