<?php 
    include_once ("header.html");
?>
    <img id="navigation-icon" class="navMenu-icon" src="images/menu.svg" onclick="handleMenu()" alt="Menu icon">
    <nav id="navigation" class="navMenu">
        <a href="index.php#navigation">Úvod</a>
    </nav>
</div>
<div id="gallery">
<div id="image-gallery-overlay" class="gallery-overlay">
        <div class="gallery-popup">
            <span class="gallery-close" onclick="closeGalleryPopup()">&times;</span>
            <img id="gallery-popup-img" src="" alt="">
        </div>
    </div>
</div>
<p class="credits">&#169; Venera, 2023</p>
<script src="js/script.js"></script>
<script src="js/gallery.js"></script>
</body>
</html>