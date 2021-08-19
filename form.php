<html>
    <head>
        <title>Embed CSS</title>
        <style>

            /* h1{
                color:blue;
                font-family:arial;
                font-size:100px;
            }

            h2{
                color:green;
                font-family;verdana;
                font-style:oblique;
                font-variant-caps: small-caps;
            }

            p{
                color:grey;
                font-family:georgia, serif;
            } */

            body {
                width:70%;
                margin:auto;
            }
            label{
                font-family:arial;
               
            }

            input[type=text],input[type=date]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
            }

            textarea {
                width: 100%;
                height: 150px;
                margin:10px auto;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 5px;
                background-color: #f8f8f8;
                resize: none;
            }

            input[type=button], input[type=submit], input[type=reset] {
                background-color: #4CAF50;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius:10px;
               
            }

            .clear {
                background-color: red;
                border: none;
                color: white;
                padding: 16px 32px;
                text-decoration: none;
                margin: 4px 2px;
                cursor: pointer;
                border-radius:10px;
            }

            .double {
                display:flex;
            }
        </style>
    </head>
    <body>

      <center>
      <h1><b>Formulir Pendaftaran </b></h1>

<h2>Training of Trainer & Rekrutmen Relawan</h2>
      </center>

        <p>Assalamualaikum</p>
        <p>
           Semoga menjumpa dalam keadaan sehat. Kami mengucapkan terima kasih atas ketertarikan teman-teman mengikuti Tot dan Rekrutmen relawan ini. Agar memudahkan kami dalam mengenal calon peserta, silahkan mengisi formulir di bawah ini.
        </p>



        <form action="" method="POST">
            <h3><b>1.Identitas</b></h3>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" placeholder="kiga">
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" id="alamat"></textarea>
            
            <label for="tempat">Tempat / Tanggal Lahir : </label>
            <br>
            <span class="double">
            <input style="flex:1;" type="text" name="tempat" id="tempat" placeholder="Bogor">

            <input style="flex:2;margin-left:10px;" type="date" name="ttl" id="ttl" >

            </span>
<br>
            <label>Asal perguruan tinggi :</label>
            <input type="text" name="asal" placeholder="Institut Teknologi Bandung"/>
           
            <label>Jurusan :</label>
            <input type="text" name="jurusan" placeholder="Teknik Fisika" />
            <label>Hp :</label>
            <br>
            <span class="double">
            <input style="flex:1;text-align:center;" value="+62" type="text" name="tempat" id="tempat" disabled>

            <input style="flex:7;" type="text" placeholder="895331493506" name="hp" id="hp">

            </span>
           <hr noshade>
            <br>

            <!-- <textarea name="alamat">Masukan alamat ...</textarea> -->
            
            <h3><b>1.Motivasi</b></h3>
            <label for="pendapat">PENDAPAT DAN IMPIANMU TENTANG PENDIDIKAN INDONESIA :</label>
            <textarea name="pendapat" id="pendapat"></textarea>
            
            <label for="alasan">Alasan bergabung pada yayasan ini :</label>
            <textarea name="alasan"></textarea>
            
            <label for="harapan">Harapan setelah diterima :</label>
            <textarea name="harapan"></textarea>
            <span style="font-size:15px;">*Silahkan kirim formulir ini ke test@gmail.com</span> 
            <br>
            <center> <input type="submit" name="proses" value="Proses"/></center>
           
        </form>
      <center>
      <a class="clear" href="clear_reload.php"> Clear</a> 
<br>
      </center>
      <br>
      <br>
      <br>
    <?php if(isset($_POST["proses"])){ ?>
           
            <hr style="border-top: dashed 3px;">
<center><h2>Data</h2></center>

        <h2>1.Identitas</h2>
        <ul>
            <li>Nama : <?= $_POST["nama"] ?></li>
            <br>
            <li>Alamat : <?= $_POST["alamat"] ?></li>
            <br>
            <li>Tempat : <?= $_POST["tempat"] ?></li>
            <br>
            <li>Tanggal Lahir : <?= $_POST["ttl"] ?></li>
            <br>
            <li>Asal Perguruan : <?= $_POST["asal"] ?></li>
            <br>
            <li>Jurusan : <?= $_POST["jurusan"] ?></li>
            <br>
            <li>Hp : +62 <?= $_POST["hp"] ?></li>
            <br>
        </ul>

        <h3>2.Motivasi</h3>
       <ul>
       <li>PENDAPAT DAN IMPIANMU TENTANG PENDIDIKAN INDONESIA :<br><br> <?= $_POST["pendapat"] ?></li>
       <br> 
       <li>Alasan bergabung pada yayasan ini :<br><br> <?= $_POST["alasan"] ?></li>
       <br> 
       <li>Harapan setelah diterima:<br><br> <?= $_POST["harapan"] ?></li>
       <br>
       </ul>
        <?php } ?>



        <footer>
            <center><b>Copyright Reksa Prayoga S</b></center>
            <br>
        </footer>
    </body>
</html>