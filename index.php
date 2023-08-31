<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include './includes/autoloader.inc.php';
    include_once ("header.html");
?>
    <img id="navigation-icon" class="navMenu-icon" src="images/menu.svg" onclick="handleMenu()" alt="Menu icon">
    <nav id="navigation" class="navMenu">
        <a href="index.php#about-tag">O nás</a>
        <a href="index.php#music-tag">Hudba</a>
        <a onclick="showEventPopup()">Akce</a>
        <a href="gallery.php#navigation">Galerie</a>
        <a class="l" href="index.php#contact-tag">Kontakt</a>
        <div class="dot"></div>
    </nav>
</div>
<div id="events-tag" class="events-overlay">
    <div class="events-popup">
        <span class="events-close" onclick="closeEventPopup()">&times;</span>
        <div class="events-buttons">
            <p onclick="showPreviousEvents()">uplynulé</p>
            <p onclick="showFutureEvents()">nadcházející</p>
        </div>
        <div id="previousEvents" class="events-info">
            <?php
                $events = new EventView();
                $events -> showPreviousEvents();
            ?>
        </div>
        <div id="futureEvents" class="events-info">
            <?php
                if (!$events -> showFutureEvents()) { 
            ?>
                <div class="events-none">
                    <img class="events-none-img" src="images/sadface.jpg" alt="Sad lady drawing">
                    <p class="events-none-text">Je nám líto, ale momentálně nemáme naplánované jiné akce.<br>
                    Pokud byste se s námi chtěli na nějaké domluvit, kontaktujte nás.</p>
                </div>     
            <?php
                }
            ?>
        </div>
    </div>
</div>
<div id="about-tag" class="about">
    <img class="about-photo" src="images/kap.png" alt="Fotka kapely">
    <div class="about-box">
        <p class="about-box-text"><span>Venera</span> je 90' post hardcore, alternative rock kapela založená v roce 2017 v Českých Budějovicích.
            V roce 2020 vydala debutové album <a href="#">Tak blízko od sebe</a>, které vyšlo u vydavatelství
            <a href="http://www.venusflagrecords.com/" target="_blank">Venus Flag Records</a>.</p>
    </div>
</div>
<div id="music-tag" class="music">
    <span class="info-icon" onclick="showAlbumPopup()"><img class="info-img" src="images/info.svg" alt="info icon"></span>
    <div id="info-popup" class="music-overlay">
        <div class="music-popup">
            <span class="music-close" onclick="closeAlbumPopup()">&times;</span>
            <h3>tak blízko od sebe</h3>
            <img src="images/cd.jpg" alt="Album Cover">
            <ol>
                    <li><span>01</span> jak brzy je teď</li>
                    <li><span>02</span> vzrušení z nul</li>
                    <li><span>03</span> za zdí</li>
                    <li><span>04</span> ve znamení Domina</li>
                    <li><span>05</span> a nebe padalo</li>
                    <li><span>06</span> v peřinách</li>
                    <li><span>07</span> bez přistání</li>
                    <li><span>08</span> dron</li>
                    <li><span>09</span> tak blízko od sebe</li>
            </ol>
            <p>
                VENERA // Tomáš Zadražil - zpěv, kytara / Petr Studihrad - bicí / Petr Havelka - kytara<br>
                mix & master - Amák Golden<br>
                Golden Hive Studios v Praze, 2019<br>
            </p>
        </div>
    </div>
    <div class="music-slide">
        <img class="music-slide-img" src="images/cd-cut.jpg" alt="Album cover">
        <div class="music-slide-player">
            <audio></audio>
            <p class="music-slide-player_title" id="song-title"></p>
            <div class="music-slide-player_buttons">
                <button id="previous-btn"><img src="images/left-arr.svg" alt="left arrow button"></button>
                <button id="play-pause-btn"><img src="images/play.svg" alt="play button"></button>
                <button id="next-btn"><img src="images/right-arr.svg" alt="right arrow button"></button>
            </div>
            <div class="music-slide-player_timebar">
                <progress id="progress-bar" min="0" max="100" value="0"></progress>
                <p>
                    <span id="current-time">0:00</span>
                    <span>/</span>
                    <span id="duration">0:00</span>
                </p>
            </div>
        </div>
    </div>
    <p id="music-album_name">tak blízko od sebe</p>
    <p class="music-review" style="text-align: center;">„Českobudějovická kapela Venera na svém prvním albu z roku 2020 servíruje 
            vybrané pochoutky současného pojetí post-hardcore, grunge, space rockové 
            scény. Zároveň nezaměnitelným vokálem Tomáše "Čerta" Zadražila dělá z 
            téhle party ostřílených muzikantů unikátní zjevení na tuzemské klubové 
            scéně. Přirovnání k <span>HUM, Quicksand, Deftones či Smashing Pumpkins</span> je 
            namístě jen do chvíle, než vás pohltí obrazotvorný svět vokálních obratů 
            v českém jazyce, který funguje zároveň i jako nezaměnitelné poznávací 
            znamení. Amákovo Golden Hive Studios, kde bylo album natočeno , podtrhuje dynamiku 
            kytarových stěn skloubenou s dynamikou rytmiky v jeden celek. Byť přirovnání 
            může být návodem, Venera stejně tvoří s vlastní originální razancí, kterou 
            podtrhuje český jazyk.“<span class="author">- album review, Stanislav Polata</span></p>
</div>
<div id="contact-tag" class="contact">
<div>
    <h2 class="contact-title">Kontakt</h2>
    <p class="contact-text">
        +420 703 588 863<br>
        veneraband@email.cz
    </p>
    <div class="contact-text-socials">
        <a href="https://www.facebook.com/venera9?locale=id_ID" target="_blank"><img src="images/facebook.svg" alt="Facebook icon"></a>
        <a href="https://www.instagram.com/venera_cz/?fbclid=IwAR0HCxEuxcHFPkLUhb22eskJFMcJ4_tj_MldZYwSMn5AjYTptCVbBaW5liQ" target="_blank"><img src="images/instagram.svg" alt="Instagram icon"></a>
        <a href="https://open.spotify.com/artist/7iYCpYd5LwqT3XqW7HmIUq" target="_blank"><img src="images/spotify.svg" alt="Spotify icon"></a>
        <a href="https://venera9cz.bandcamp.com/album/tak-bl-zko-od-sebe" target="_blank"><img src="images/bandcamp.svg" alt="Bandcamp icon"></a>
    </div>
</div>
<p class="credits">&#169; Venera, 2023</p>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/audio.js"></script>
</body>
</html>