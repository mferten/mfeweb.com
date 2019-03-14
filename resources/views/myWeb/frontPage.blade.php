@extends('layouts.master')
@push('header')
<!-- place holder -->
        <header>
            <h1 id="h1Title">M.F.E. Websites</h1>
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
    <script>
        // Country Greetings in the native (top used) language (From utilityForFlags...)
        // ISO CODES two digits as it is used in mapsdata.js SimpleMaps
        var countryGreetingTexts = {
        0: "سلام، څنګه یې؟",
        1: "Hi, How are you doing?",
        2: "مرحبا كيف حالك",
        3: "Selamat sejahtera, Apa Khabar?",
        4: "Hi, si jeni?",
        5: "Ողջույն, ինչպես եք դուք",
        6: "Oi tudo bem",
        7: "Hola, ¿cómo estás?",
        8: "Hallo, wie geht es dir?",
        9: "Привет, как дела?",
        10: "Ciao, come stai?",
        11: "Привіт як ти?",
        12: "Hallo, hoe gaat het?",
        13: "Salam, necəsən?",
        14: "Zdravo, kako si?",
        15: "嗨，你好吗？",
        16: "হাই, কেমন আছেন?",
        17: "Malo ni, ea mai koe?",
        18: "Salut, comment ça va?",
        19: "Здравей, как си?",
        20: "Bwakeye, Urakomeye?",
        21: "Хуб, чӣ хел шумо ҳастед?",
        22: "Kuzoozangpo La, Ga Day Bay Zhu Yoe Ga ?",
        23: "Dumela mma Dumela rra",
        24: "Hoe gaan dit met jou?",
        25: "Γεια σου, πώς είσαι",
        26: "Ahoj, jak se máš?",
        27: "Hej, hvordan har du det?",
        28: "Tere, kuidas sul läheb?",
        29: "መርሓባ ከመይ ኣለኻ ከመይ ኣለኺ",
        30: "እንዴት ነህ! naqaa? isin attam?",
        31: "Hei, miten olet?",
        32: "გამარჯობა, როგორ ხარ?",
        33: "สวัสดีคุณเป็นอย่างไร?",
        34: "Malō soifua Ua mai oe?",
        35: "Bok, kako si?",
        36: "Ahoj, ako sa máš?",
        37: "Szia, hogy vagy?",
        38: "Hai, piye kabare?",
        39: "Dia duit, cén chaoi a bhfuil tú?",
        40: "Salom, qanday qilib?",
        41: "हाय, तुम कैसे हो",
        42: "Hi, tu çawa?",
        43: "سلام، چطوری؟",
        44: "Hæ, hvernig ertu?",
        45: "Merhaba, nasılsın?",
        46: "Bună, ce mai faci?",
        47: "こんにちは、元気？",
        48: "Салам, кандайсыз?",
        49: "សួស្តីតើអ្នកសុខសប្បាយទេ?",
        50: "안녕, 안녕하세요?",
        51: "Сәлеметсіз бе, сіз қалайсыз?",
        52: "ສະບາຍດີ, ທ່ານແມ່ນແນວໃດ?",
        53: "හායි, කොහොමද ඔයා?",
        54: "Sveiki, kaip tu gyveni?",
        55: "Hallo, wéi sidd Dir?",
        56: "Sveiks, kā tu esi?",
        57: "Cześć, jak się masz?",
        58: "Здраво, како си?",
        59: "Ekamowir Omo, Wo Areit Ed",
        60: "Hi, ahoana ianao?",
        61: "Io̧kwe kom̧  Ej et mour",
        62: "Fakaalofa atu!, Malolo nakai a koe?",
        63: "Aw ni ce Aw ka kεnε wa?",
        64: "မင်္ဂလာပါနေကောင်းလား?",
        65: "Сайн байна уу, чи яаж байна?",
        66: "Hej, hur mår du?",
        67: "Hi, kif int?",
        68: "Bonzur	Ki manyèr?",
        69: "Assalaa mu alaikum Kihineh",
        70: "Moni Moni onse Muli bwanji?",
        71: "Xin chào, bạn thế nào?",
        72: "Selamat, Apa kabar",
        73: "سلام، توهان ڪيئن آهيو؟",
        74: "Hei, hvordan har du det?",
        75: "नमस्ते, तिमीलाई कस्तो छ?" }

        var startNumber = 0;
        setTimeout(function() {
            setInterval(mySalutationTimer, 2000);
        }, 1500);

        function mySalutationTimer() {
            document.getElementById("h1Title").innerHTML = countryGreetingTexts[startNumber++];
            if (!countryGreetingTexts[startNumber]) startNumber = 0;
        }
    </script>
@endpush
