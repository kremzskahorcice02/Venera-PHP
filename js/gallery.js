let gallery = document.getElementById('gallery');

for (let i = 1; i <= 23; i++) {
    let container = document.createElement("div");
    container.className = "gallery-container";
    let img = document.createElement("img");
    let src = "../images/gallery/" + i + ".jpg"; 
    img.src = src;
    img.alt = "Fotka kapely"
    gallery.appendChild(container).appendChild(img);
}