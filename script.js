/* =======================
   TYPING EFFECT
======================= */
const texts = [
    "IT Student",
    "Web Developer",
    "UI / UX Designer",
    "Problem Solver"
];

let index = 0;
let charIndex = 0;
const typingElement = document.querySelector(".typing");

function typeEffect() {
    if (!typingElement) return;

    if (charIndex < texts[index].length) {
        typingElement.textContent += texts[index].charAt(charIndex);
        charIndex++;
        setTimeout(typeEffect, 100);
    } else {
        setTimeout(eraseEffect, 1800);
    }
}

function eraseEffect() {
    if (charIndex > 0) {
        typingElement.textContent =
            texts[index].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseEffect, 50);
    } else {
        index = (index + 1) % texts.length;
        setTimeout(typeEffect, 500);
    }
}

document.addEventListener("DOMContentLoaded", typeEffect);


/* =======================
   SCROLL ANIMATION
======================= */
const cards = document.querySelectorAll(".about-cards .card");

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("visible");
        }
    });
}, { threshold: 0.2 });

cards.forEach(card => observer.observe(card));


/* =======================
   SMOOTH SCROLL
======================= */
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute("href"))
            .scrollIntoView({ behavior: "smooth" });
    });
});
