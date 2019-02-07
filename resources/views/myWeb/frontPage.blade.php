@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1><abbr title="Mehmet F Erten: Mehmet Fatih Erten"> M.F.E</abbr> Web Sites</h1>
            <nav id="menu">
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.k12k20.com" target="_blank">
                            Nice to Meet the World
                        </a>
                    </li>
                    <li>
                        <a href="http://www.k12k20tr.com" target="_blank">
                            Dünyamız ile Tanışalım
                        </a>
                    </li>
                    <li>
                        <a href="http://www.k12k20sk.com" target="_blank">
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
                          <p class="masterDGM">Digital Media Design GPA: 3.94</p>
                    </figcaption>
                    <a href="docs/Transcripts.pdf" target="_blank">
                        <img id="transcriptSize" class="img10 aPng" src="docs/Transcripts.jpeg"
                            alt="MFE Harvard FAS DCE HES ALM"/>
                    </a>
                </figure>
            </h2>
            <!-- User Opinion -->
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
