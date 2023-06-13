<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venera</title>
    <link rel="icon" type="image/x-icon" href="images/icon.png">
    <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<section>
    <img class="stars" src="images/stars.jpg" alt="Starry night" id="bg">
    <img class="lod" src="images/lod.png" alt="" id="lod">
    <img class="venus" src="images/venus.png" alt="" id="venus">
    <img class="mountain" src="images/mountain.png" alt="" id="mountain">
    <img class="road" src="images/road.png" alt="" id="road">
    <h1 id="text">Venera</h1>
</section>
<div id="top" class="navDiv">
    <nav class="navMenu">
        <a href="#about-tag">O nás</a>
        <a href="#music-tag">Hudba</a>
        <a href="#events-tag">Akce</a>
        <a class="l" href="#contact-tag">Kontakt</a>
        <div class="dot"></div>
    </nav>
</div>
<div id="events-tag" class="overlay-events">
    <div class="popup-events">
        <a class="close" href="#about-tag">&times;</a>
        <div class="events-buttons">
            <p onclick="showPreviousEvents()">uplynulé</p>
            <p onclick="showFutureEvents()">nadcházející</p>
        </div>
        <div id="previousEvents">
            <p class="events-list" th:each="event : ${eventsPrevious}" th:text="|${event.date} ${event.city} - ${event.place} + ${event.otherArtists}|"></p>
        </div>
        <div id="futureEvents">
            <div th:if="${!eventsFuture.isEmpty()}" class="events-info">
                <p class="events-list" th:each="event : ${eventsFuture}"><span th:text="${event.date}"></span> <span th:text="${event.city}"></span> - <span th:text="${event.place}"></span></p>
            </div>
            <div id="" th:unless="${!eventsFuture.isEmpty()}" class="events-none">
                <img th:src="@{images/sadface.jpg}" alt="Sad lady drawing">
                <p>Je nám líto, ale momentálně nemáme naplánované jiné akce.<br>
                    Pokud byste se s námi chtěli na nějaké domluvit, kontaktujte nás.</p>
            </div>
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
    <a class="info-href" href="#info-popup"><img class="info-img" src="images/info.svg" alt="info icon"></a>
    <div id="info-popup" class="overlay-music">
        <div class="popup-music">
            <a class="close" href="#music-tag">&times;</a>
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
            <p class="music-slide-player_title" id="song-title"></p>
        </div>
    </div>
    <p id="music-album_name">tak blízko od sebe</p>
</div>
<div id="contact-tag" class="contact">
    <h2 class="contact-title">Kontakt</h2>
    <p class="contact-text">
        +420 703 588 863<br>
        veneraband@email.cz
    </p>
    <div class="contact-text-socials">
        <a href="https://www.facebook.com/venera9?locale=id_ID"><img src="images/facebook.svg" alt="Facebook icon" target="_blank"></a>
        <a href="https://www.instagram.com/venera_cz/?fbclid=IwAR0HCxEuxcHFPkLUhb22eskJFMcJ4_tj_MldZYwSMn5AjYTptCVbBaW5liQ" target="_blank"><img src="images/instagram.svg" alt="Instagram icon"></a>
        <a href="https://open.spotify.com/artist/7iYCpYd5LwqT3XqW7HmIUq"><img src="images/spotify.svg" alt="Spotify icon" target="_blank"></a>
        <a href="https://venera9cz.bandcamp.com/album/tak-bl-zko-od-sebe"><img src="images/bandcamp.svg" alt="Bandcamp icon" target="_blank"></a>
    </div>
</div>
<p class="credits">&#169; Venera, 2023</p>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/audio.js"></script>
</body>
</html>