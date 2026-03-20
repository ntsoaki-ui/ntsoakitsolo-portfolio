<?php 
// about.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<section id="about" class="about-section"> 
    <h2>About Me</h2>
   <p>
    I am an IT student with a strong passion for software development, networking, and web technologies. 
    I believe that networking is the backbone of modern IT systems, as it enables communication, security, 
    and the seamless operation of digital solutions.
</p>

<p>
    My interest goes beyond just development—I focus on understanding how systems connect, communicate, 
    and perform in real-world environments. This allows me to build solutions that are not only functional 
    but also efficient, reliable, and scalable.
</p>

<p>
    I enjoy designing and developing user-friendly applications using technologies such as Python, JavaFX, 
    and PHP, along with database systems like MySQL and PostgreSQL. I am constantly improving my skills 
    through hands-on projects that challenge me to think critically and solve real problems.
</p>

<p>
    In addition to software development, I have a growing interest in networking and cybersecurity, where 
    I explore how systems are secured, monitored, and optimized. This combination of skills allows me to 
    approach projects from both a development and infrastructure perspective.
</p>

<p>
    I am dedicated to continuous learning and staying up to date with modern technologies. My goal is to 
    grow into a well-rounded IT professional who can design, develop, and manage secure and efficient 
    digital systems.
</p>
    <div class="about-cards">
        <!-- SKILLS -->
        <div class="card">
            <h3>Skills</h3>
            <ul class="dotted-list">
                <li><strong>Programming:</strong> HTML, CSS, JavaScript, PHP, Python for web and software development</li>
                <li><strong>UI/UX Design:</strong> Designing user-friendly interfaces using Figma and Adobe XD</li>
                <li><strong>Databases:</strong> MySQL and MongoDB for data storage and management</li>
                <li><strong>Tools & Technologies:</strong> Git, GitHub, VS Code, XAMPP, Firebase</li>
                <li><strong>Problem Solving:</strong> Debugging, logical thinking, and code optimization</li>
            </ul>
        </div>

        <!-- ACHIEVEMENTS -->
        <div class="card">
            <h3>Achievements</h3>
            <ul class="dotted-list">
                <li>Developed and deployed a personal portfolio website to showcase projects and skills</li>
                <li>Built multiple academic systems including sesotho-learning chatbot, payroll and vehicle rental systems</li>
                <li>Successfully completed several university programming and web development projects</li>
                <li>Collaborated on group projects using Git and version control best practices</li>
                <li>Continuously learning and applying new technologies through self-study</li>
            </ul>
        </div>

        <!-- HOBBIES & INTERESTS -->
        <div class="card">
            <h3>Hobbies & Interests</h3>
            <ul class="dotted-list">
                <li>Exploring new programming languages and development frameworks</li>
                <li>Learning about cybersecurity, ethical hacking, and system security</li>
                <li>Experimenting with UI/UX designs and improving user experience</li>
                <li>Building personal and experimental coding projects</li>
                <li>Staying updated with emerging technology trends</li>
            </ul>
        </div>
    </div>

    <!-- DOWNLOAD CV BUTTON -->
    <a href="NTSOAKI TSOLO'S CV.pdf" download class="download-cv">
        <i class="fas fa-download"></i> Download CV
    </a>
</section>

<footer>
    <p>© 2025 ntsoakitsolo. All rights reserved.</p>
</footer>

<!-- JS for scroll animation -->
<script>
const cards = document.querySelectorAll('.about-cards .card');
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add('visible');
        }
    });
}, { threshold: 0.2 });

cards.forEach(card => observer.observe(card));
</script>

</body>
</html>
