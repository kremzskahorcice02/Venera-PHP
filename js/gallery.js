let gallery = document.getElementById('gallery');
let galleryOverlay = document.getElementById('image-gallery-overlay');
let galleryPopupImg = document.getElementById('gallery-popup-img');

for (let i = 1; i <= 23; i++) {
    let container = document.createElement("div");
    container.className = "gallery-container";
    let img = document.createElement("img");
    let src = "../images/gallery/" + i + ".jpg"; 
    img.src = src;
    img.alt = "Fotka kapely";
    gallery.appendChild(container).appendChild(img);
}

document.addEventListener("click", function(e){
    const target = e.target.closest(".gallery-container img"); // Or any other selector.
  
    if(target){
        galleryOverlay.style.visibility = "visible";
        galleryOverlay.style.opacity = 1;
        galleryPopupImg.src = target.src;
    }
  });

function closeGalleryPopup() {
    galleryOverlay.style.visibility = "hidden";
    galleryOverlay.style.opacity = 0;
}