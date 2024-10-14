// open & close menu
function openMenu() {
  document.getElementById("navList").style.width = "100%";
}

function closeMenu() {
  document.getElementById("navList").style.width = "";
}

// hero slideshow
var cur = 0;
var slides = document.getElementsByClassName("hero-img");
var waktu = 5000

setInterval(function() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.opacity = 0;
  }
  cur = (cur != slides.length - 1) ? cur + 1 : 0;
  slides[cur].style.opacity = 1;
}, waktu);

// navigation scroll
var links = document.querySelectorAll(".nav-list > a");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}

// nav bar
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("header").style.padding = "15px 0";
  } else {
    document.getElementById("header").style.padding = "24px 0";
  }
}

// active nav
var section = document.querySelectorAll(".section");
var sections = {};
var i = 0;

Array.prototype.forEach.call(section, function(e) {
  sections[e.id] = e.offsetTop;
});

window.onscroll = function() {
  scrollFunction();
  var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

  for (i in sections) {
    if (sections[i] <= scrollPosition) {
      document.querySelector('.active').setAttribute('class', 'nav-link');
      document.querySelector('a[href*=' + i + ']').setAttribute('class', 'nav-link active');
    }
  }
}
