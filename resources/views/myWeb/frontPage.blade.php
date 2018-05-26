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
                        <a href="http://www.mfeworld.com/" target="_blank">World Flags & Countries: Discover
                            <span class="superScript mfeSmall">*1</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">Fill the Map with The Flags
                            <span class="superScript mfeSmall">*1</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">Fix the Mixed Flags
                            <span class="superScript mfeSmall">*1</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">Countries Trivia
                            <span class="superScript mfeSmall">*2</span></a>
                    </li>
                    <li>
                        <a href="http://www.mfework.com/" target="_blank">Flags Trivia
                            <span class="superScript mfeSmall">*2</span></a>
                    </li>
                    <li>
                        <h2>Miscellaneous</h2>
                        <a href="http://www.mfeworld.com/citations" target="_blank">&nbsp;Citations&nbsp;</a>
                        <a href="https://github.com/mferten" target="_blank">&nbsp;GitHub&nbsp;</a>
                        <a href="https://www.mfeweb.com/mail" target="_blank">&nbsp;Mail&nbsp;</a>
                    </li>
                </ul>
            </nav>

            <article>
                <p><span class="superScript mfeSmall">*1&nbsp;</span>
                    <span class="mfeMedium">-[Prototype] Laravel/Elequent(ORM)/Ajax</span>
                </p>
                <p><span class="superScript mfeSmall">*2&nbsp;</span>
                    <span class="mfeMedium">-Spring MVC/Hibernate/JPA2(ORM)</span>
                    <span class="mfeSmall">To Be Constructed</span>
                </p>
            </article>
        </main>
@endpush

@push('jsFiles')
<!-- place holder -->
        <script src="js/mfeweb.js"></script>
@endpush
