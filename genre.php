<?php
include "navbar.php";




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curhatkuy!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/genre.css">
    </head>
    <body>
    <main>
        <section class="hero">
            <h2>CERITA MEREKA</h2>
            <p>Baca kisah-kisah dari pengguna lain yang berbagi perjuangan, harapan, dan pengalaman hidup. 
                Temukan dukungan dan kenyamanan, karena di sini, kamu tidak sendirian.</p>
        </section>

        <section class="stories">
            <div class="scroll-container">
            <div class="story">
                <img src="toxicfriends.png" alt="Toxic Friend">
                <h3>TOXIC FRIEND</h3>
                <button class="READ-MORE" onclick="location.href='isi/toxicfriend.php'">READ MORE</button>
            </div>
            <div class="story">
                <img src="badpartner.png" alt="Bad Partner">
                <h3>BAD PARTNER</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
            <div class="story">
                <img src="burnout.png" alt="Burn Out">
                <h3>BURN OUT</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
            <div class="story">
                <img src="hatefam.png" alt="Broken Home">
                <h3>BROKEN HOME</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
            <div class="story">
                <img src="insecurity.jpg" alt="Insecurity">
                <h3
                >INSECURITY</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
            <div class="story">
                <img src="academicpress.jpg" alt="Broken Home">
                <h3>ACADEMIC PRESSURE</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
            <div class="story">
                <img src="loneliness.jpg" alt="Broken Home">
                <h3>LONELINESS</h3>
                <button class="READ-MORE">READ MORE</button>
            </div>
        <div class="story">
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
