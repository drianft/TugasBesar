<?php
include "navbar.php";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR WEB</title>
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            flex-direction: row;
            padding: 20px;
            border: solid;
        }
        .about-image {
            padding: 20px;
            border: solid;
        }
        .about-image img {
            width: 10rem;
            height: 20rem;
            margin-right: 90px;
            
        }

        @media screen and (max-width: 600px) {
            .container {
                flex-direction: column;
            }
            .about-image img {
                width: 100%;
                height: auto;
                margin-right: 20px;
            }
            p{
                flex: 1;
            }
        }

        
    </style>
</head>
<body>
          <!-- Page Content -->
          <div class="container">
              <div class="about-image">
                <img src="css/Logo.jpg" alt="">
              </div>
              <div class="about-content">
                <h4>ABOUT OUR WEB</h4>
                <h1>SEKILAS TENTANG CURHATKUY!</h1>
                <p>Curhatkuy! adalah tempat dimana perasaan-perasaan yang terpendam bisa dikeluarkan, diungkapkan tanpa rasa takut akan penilaian. Kami percaya bahwa setiap orang berhak untuk merasa didengar dan merasa bahwa meraka tidak sendirian dalam menghadapi perasaan berat yang mereka alami.</p><br>
              
                <P>"Curhatkuy!" adalah platform online yang dirancang untuk memberikan ruang aman bagi anda untuk mengekspresikan perasaan, berbagi cerita, dan mendapatkan dukungan emosional. Apakah Anda sedang menghadapi masalah pribadi, merasa cemas, atau hanya butuh tempat untuk mencurahkan isi hati, "Curhatkuy!" hadir untuk membantu. Dengan fitur anonim, komunitas yang mendukung, dan akses ke konseling professional, kami berkomitmen untuk menjaga privasi dan kesejahteraan mental Anda. Di "Curhatkuy!", Anda tidak sendirian.</P>
            </div>
        </div>
        <footer><span>Curhatkuy! <br></span>
          by kelompok delapan
        </footer>
</body>
</html>