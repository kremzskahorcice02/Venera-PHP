let bg = document.getElementById('stars');
let venus = document.getElementById('venus');
let lod = document.getElementById('boat');
let mountain = document.getElementById('mountain');
let road = document.getElementById('road');

var lastScrollTop = 0;

const body = document.querySelector("body");
let eventPopup = document.getElementById("events-tag");
let albumPopup = document.getElementById("info-popup");

// close nad open menu

let navDiv = document.getElementById("top");
let navMenu = document.getElementById("navigation");
let menuIcon = document.getElementById('navigation-icon');
let about = document.getElementById('about-tag');


window.addEventListener('scroll', function() {
    var value = window.pageYOffset || document.documentElement.scrollTop;

    bg.style.top = value * 0.5 + 'px';
    venus.style.top = value * 0.5 + 'px';
    lod.style.left = value * 0.7 + 'px';
    lod.style.top = value * 0.7 + 'px';
    console.log(value);
    if (value > lastScrollTop) {
        lod.src="../images/lod.png";
    } else if (value < lastScrollTop) {
        lod.src="../images/lod-reversed.png";
    } // else was horizontal scroll
    lastScrollTop = value <= 0 ? 0 : value; // For Mobile or negative scrolling

    mountain.style.top = value * 0.15 + 'px';
    road.style.top = value * 0.2 + 'px';
    text.style.top = value * 0.8 + 'px';
})

document.querySelectorAll('nav a').forEach(element => element.addEventListener('click', () => {
    navDiv.classList.remove('navDiv-open');
    navMenu.classList.remove('navMenu-open');
    menuIcon.src = "../images/menu.svg";
 })
);

function handleMenu() {
    if (navMenu.classList.contains('navMenu-open')) {
        navDiv.classList.remove('navDiv-open');
        navMenu.classList.remove('navMenu-open');
        menuIcon.src = "../images/menu.svg";
    } else {
        navDiv.classList.add('navDiv-open');
        navMenu.classList.add('navMenu-open')
        menuIcon.src = "../images/close.svg";
    }
}

//closing and opening popup


function showEventPopup() {
    navDiv.style.display = "none";
    eventPopup.style.visibility = "visible";
    eventPopup.style.opacity = 1;
}

function closeEventPopup() {
    navDiv.style.display = "flex";
    eventPopup.style.visibility = "hidden";
    eventPopup.style.opacity = 0;
    document.body.style.position = '';
    document.body.style.top = '';
}

function showAlbumPopup() {
    navDiv.style.display = "none";
    albumPopup.style.visibility = "visible";
    albumPopup.style.opacity = 1;
}

function closeAlbumPopup() {
    navDiv.style.display = "flex";
    albumPopup.style.visibility = "hidden";
    albumPopup.style.opacity = 0;
    document.body.style.position = '';
    document.body.style.top = '';
}

// events rendering functions

function showPreviousEvents() {
    document.getElementById("futureEvents").style.display = "none";
    document.getElementById("previousEvents").style.display = "block";
}

function showFutureEvents() {
    document.getElementById("previousEvents").style.display = "none";
    document.getElementById("futureEvents").style.display = "block";
}