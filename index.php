<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | My Portfolio</title>

    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<script src="script.js"></script>

<body>

<?php include 'navbar.php'; ?>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-text">
        <h1>
           <h1>
    Hi, I'm <span>Ntsoaki Tsolo</span><br>
    <span class="typing"></span>
</h1>

<p>
    IT Professional | Software Developer | Networking Enthusiast
</p>

<p>
    Passionate about building user-friendly digital solutions and modern web applications, 
    with a strong focus on networking to ensure secure, connected, and high-performance IT systems. 
    Skilled in Python, PHP, JavaFX, MySQL, and PostgreSQL, with hands-on experience creating scalable 
    and reliable software.
</p>
        <div class="hero-buttons">
            <a href="projects.php" class="btn">
                <i class="fas fa-code"></i> View Projects
            </a>
            <a href="NTSOAKI TSOLO'S CV.pdf" target="_blank" class="btn outline">
                <i class="fas fa-file-alt"></i> View CV
            </a>
        </div>

        <!-- TECH ICONS -->
        <div class="tech-icons">
            <i class="fab fa-html5"></i>
            <i class="fab fa-css3-alt"></i>
            <i class="fab fa-js"></i>
            <i class="fab fa-php"></i>
            <i class="fab fa-github"></i>
        </div>
    </div>

    <div class="hero-img">
        <img src="portfolio.jpg" alt="Ntsoaki Tsolo">
    </div>
</section>

<footer>
    <p>© 2025 ntsoakitsolo. All rights reserved.</p>
</footer>

<!-- TYPING EFFECT -->
<script>
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
    if (charIndex < texts[index].length) {
        typingElement.textContent += texts[index].charAt(charIndex);
        charIndex++;
        setTimeout(typeEffect, 100);
    } else {
        setTimeout(eraseEffect, 2000);
    }
}

function eraseEffect() {
    if (charIndex > 0) {
        typingElement.textContent = texts[index].substring(0, charIndex - 1);
        charIndex--;
        setTimeout(eraseEffect, 50);
    } else {
        index = (index + 1) % texts.length;
        setTimeout(typeEffect, 500);
    }
}

document.addEventListener("DOMContentLoaded", typeEffect);
</script>

</body>
</html>
