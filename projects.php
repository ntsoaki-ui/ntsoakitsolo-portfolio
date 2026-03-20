<?php 
// projects.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects | My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<?php include 'navbar.php'; ?> <!-- Include the top navigation -->

<section id="projects" class="projects">
    <h2>My Projects</h2>

    <div class="project-list">

        <!-- PAYROLL SYSTEM -->
        <div class="project-card">
            <h3>Payroll Management System</h3>
            <p class="project-desc">
                A web-based payroll system that manages employee records, salaries, and generates reports.
                It allows secure data handling and efficient salary calculations.
            </p>
            <p class="project-tech">
                <strong>Tech:</strong> Python, PostgreSQL, MySQL
            </p>
            <a href="https://payroll-system-ntsoaki.onrender.com" target="_blank" class="btn">
                <i class="fas fa-external-link-alt"></i> View Project
            </a>
        </div>

        <!-- VEHICLE RENTAL SYSTEM -->
        <div class="project-card">
            <h3>Vehicle Rental System</h3>
            <p class="project-desc">
                A rental management system that allows users to book vehicles, manage customers,
                and track rentals efficiently with a user-friendly interface.
            </p>
            <p class="project-tech">
                <strong>Tech:</strong> JavaFX, SQLite
            </p>
            <a href="https://my-app-ido1.onrender.com" target="_blank" class="btn">
                <i class="fas fa-external-link-alt"></i> View Project
            </a>
        </div>

        <!-- MediSchedule -->
        <div class="project-card">
            <h3>MediScheduling System</h3>
            <p class="project-desc">
                A healthcare web application that allows patients to book appointments online,
                reducing queues and improving hospital efficiency.
            </p>
            <p class="project-tech">
                <strong>Tech:</strong> Python, PostgreSQL
            </p>
            <a href="https://patientselfscheduling.onrender.com/" target="_blank" class="btn">
                <i class="fas fa-external-link-alt"></i> View Project
            </a>
        </div>

    </div>
</section>

<footer>
    <p>© 2025 Ntsoaki Tsolo. All rights reserved.</p>
</footer>

</body>
</html>