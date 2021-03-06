@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1 id="h1Title">M.F.E. Websites</h1>
            <figcaption class="borderImage">Prototyping a Web Company within an Organic Farm Inn</figcaption>
            <img id="menuWorldView" src="/images/_world.png" alt="World View">
            <nav id="menu">
                <ul class="ulListStyle">
                    <li>
                        <a href="http://www.k12k20.com" target="_blank">
                            <span id="mainWebSite">Nice to Meet the World</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
@endpush
@push('module')
<!-- place holder -->
        <main>
            <h2 class='harvard'>
                <figure>
                    <figcaption>
                          <p>Harvard ES</p>
                          <p class="masterDGM">
                              <ul class="ulListStyle">
                                  <li class="inlineBlock">
                                      <a href="docs/DiplomaALMIT.pdf" target="_blank"><span class="harvardThree">Master ALM-IT</span></a>
                                  </li>
                                  <li class="inlineBlock">
                                      <a href="docs/Transcripts.pdf" target="_blank"><span class="harvardThree">Dean's Award 3.94 GPA</span></a>
                                  </li>
                              </ul>
                              <ul class="ulListStyle">
                                  <li class="inlineBlock">
                                      <a href="images/programmingcertificate.png" target="_blank"><span class="harvardThree">Programming</span></a>
                                  </li>
                                  <li class="inlineBlock">
                                      <a href="images/webtechnologiescertificate.png" target="_blank"><span class="harvardThree">Web Technologies</span></a>
                                  </li>

                              </ul>
                          </p>
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
