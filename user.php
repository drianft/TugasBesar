<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
    <link rel="stylesheet" href="user.css"> 
    <style>
      .akun{
border: 3px black;
padding: 10px;
background-color: plum;
text-align: center;
font-size: 90%px;
margin-left: 300px;
margin-right: 300px;
height: 50px;
border-radius: 10%;
display: flex;
justify-content: center;
width: 60%;
}

.content{
    display: grid;
    grid-template-columns: 2fr 3fr;
    gap: 20px;
    width: 80%;margin: 20px auto;
    align-items: start;

}

.kiri{
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 10px;;
}

.kiri img{
    width: 150px;
  border: solid;
  border-radius: 200px 200px;
}

.kiri button{
    padding: 10px;
}


.kanan{
    background-color: rgb(234, 153, 235);
     text-align: left;
       padding: 70px;
       border-radius: 20px;
    }

    p{
        background-color: antiquewhite;
        padding: 7px;
        border-radius: 10%;
        text-align: center;
    }

footer{
    position: absolute;
    bottom: 0;
    padding: 2px 2px;
    text-align: center
}
    </style>
    <!-- link lalu tab -->
</head>
<body>
    <div class="content">
      <div class="kanan">
        <p>data kamu</p>
    <label for="nama">nama</label>
            <input type="text" id="nama" placeholder="ketik nama kamu disini">
<br>
    <label for="email">email</label>
            <input type="text" id="email" placeholder="isi email">
<br>
     <label for="nama-samaran">nama samaran</label>
            <input type="text" id="nama-samaran" placeholder="nama samaran kamu">
          </div>


          <div class="kiri">
            <h3>nama akun</h3>
          <img src="foto profil.png" alt="foto pp">
           <button>edit profil</button>
        </div>
      </div>

            <footer>
                <h5>CURHATKUY!</h5>
                <h5>by kelompok delapan</h5>
            </footer>
</body>
</html>