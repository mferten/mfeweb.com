@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1>M.F.E Web Sites</h1>
            <h2 id="id_DateTime">Date and Time</h2>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <nav>
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.mfeworld.com/" target="_blank">World Flags & Countries: Play & Search
                            <span class="superScript mfeSmall">*1</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">Diet: What and How to Eat
                            <span class="superScript mfeSmall">*2</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfeworld.com/citations" target="_blank">~ MFE Citations</a>
                    </li>
                    <li>
                        <a href="https://github.com/mferten" target="_blank">~ MFE GitHub</a>
                    </li>
                    <li>
                        <a href="https://www.mfeweb.com/mail" target="_blank">~ MFE Mail</a>
                    </li>
                </ul>
            </nav>

            <article>
                <h2>In Progress</h2>
                <p><span class="superScript mfeSmall">*1&nbsp;</span>
                    <span class="mfeMedium">-[Prototype] Laravel/Elequent(ORM)/Ajax</span>
                </p>
                <p><span class="superScript mfeSmall">*2&nbsp;</span>
                    <span class="mfeMedium">-Spring MVC/Hibernate/JPA2(ORM)/Ajax</span>
                    <span class="mfeSmall">Under Construction</span>
                </p>
            </article>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
