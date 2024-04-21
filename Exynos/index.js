const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");

menuBtn.addEventListener("click", () =>{
    menuBtn.classList.toggle("active");
    navigation.classList.toggle("active");
});

const btns = document.querySelectorAll(".nav-btn");
const slides = document.querySelectorAll(".video-slide");
const contents = document.querySelectorAll(".content");

let currentSlide = 0; // Inicializa o slide atual como 0
let slideInterval; // Variável para armazenar o intervalo

const sliderNav = function(manual) {
    btns.forEach((btn) => {
        btn.classList.remove("active");
    });

    slides.forEach((slide) => {
        slide.classList.remove("active");
    });

    contents.forEach((content) => {
        content.classList.remove("active");
    });

    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
    currentSlide = manual; // Atualiza o slide atual
};

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        sliderNav(i);
    });
});

// Função para avançar automaticamente os slides
const autoSlide = function() {
    currentSlide = (currentSlide + 1) % slides.length;
    sliderNav(currentSlide);
};

// Inicia o avanço automático a cada 3 segundos (3000 ms)
slideInterval = setInterval(autoSlide, 13000);

// Pausa o avanço automático quando o mouse estiver sobre o carrossel
slides.forEach((slide) => {
    slide.addEventListener("mouseenter", () => {
        clearInterval(slideInterval);
    });

    slide.addEventListener("mouseleave", () => {
        slideInterval = setInterval(autoSlide, 13000);
    });
});

window.scroll({
    top:0,
    behavior:'smooth'
});

const header = document.querySelector("header");

window.addEventListener("scroll", () => {
  if (window.scrollY > 90) {
    header.style.height = "60px"; // Decrease the height on scroll
    header.style.background  = "rgba(1, 1, 1, 0.6)";
  } else {
    header.style.height = "80px"; // Reset to initial height
    header.style.background  = "transparent";
  }
});




