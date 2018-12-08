@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1 class="h1Style"><abbr title="Mehmet F Erten: Mehmet Fatih Erten"> M.F.E</abbr> Web Sites</h1>
            <h2 class='harvard harvardTwo'>
                <a href="https://www.extension.harvard.edu/academics/graduate-degrees/digital-media-design-degree" target="_blank">
                    <span class='harvard'>HES</span>
                </a>
                <abbr title="Master of Liberal Arts"> ALM</abbr>
                <abbr title="Digital Media Design"> DMD</abbr>
                <abbr id="title3"> 2019</abbr></h2>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <nav id="menu">
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.mfeworld.com" target="_blank">
                            eWorld
                        </a>
                    </li>
                    <li>
                        <a href="http://www.mfeworld.com/surfing" target="_blank">
                            eWorld Surfing
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com/searching/" target="_blank">
                            eWorld Searching
                        </a>
                    </li>
                    <li>
                        <a href="http://mfeworld.com/countryCodes/" target="_blank">
                            eWorld Country Codes
                        </a>
                    </li>
                    <li><span class='harvard displayInvisible'>-</span></li>
                    <li>
                        <a href="http://mfeworld.com:8080/world-dashboard/" target="_blank">
                            eWorld Data & Logic Center
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- User Opinion -->
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
