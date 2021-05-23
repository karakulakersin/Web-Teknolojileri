<html>
    <head>
        <meta charset= "utf-8">
        <meta name= "viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css"
        >
        <title>PANEL</title>
    </head>
    <body>
        
        <div class="wrapper">
            
                <div class="menu-bar">
                    <ul>
                        <li class "active"> <a href ="index.php">Ana Sayfa</a></li>
                        <li> <a href ="CV.php">Özgeçmiş</a></li>
                        
                        <li> <a href ="Mirasimiz.php">Mirasım</a></li>
                        <li> <a href ="iletisim.php">İletişim</a></li>
                        <li> <a href ="ilgialanlarim.php">İlgi Alanlarım</a></li>
                        <li> <a href ="cikis.php">Çıkış</a></li>
                        <li> Hoşgeldin b201210371@sakarya.edu.tr</li>
                        
                    </ul>
                </div>
                <div class="testimonial"></div>
                
                <article>
                    <h1>İLETİŞİM PANELİ</h1>
                   <br> <br>

                    <table id="customers">
                    <div class = "tablo">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>E-mail</th>
    <th>Konu</th>
    <th>Mesaj</th>
    <th>Cinsiyet</th>
  </tr>

  <?php
  session_start();
  if($_SESSION["user"]=="")
  {
    echo "<script>window.location.href='cikis.php' </script>";
  }
  else {
    
   
    include("baglanti.php");
    $sec="Select * From iletisim";
    $sonuc= $baglan->query($sec);
    if($sonuc->num_rows>0)
    {
        while($cek=$sonuc->fetch_assoc()) 
        {
          echo "
          <tr>
               <td>".$cek['adsoyad']."</td>
               <td>".$cek['telefon']."</td>
               <td>".$cek['email']."</td>
               <td>".$cek['konu']."</td>
               <td>".$cek['mesaj']."</td>
               <td>".$cek['cinsiyet']."</td>
          </tr>

          ";
        }
    }
    else{
    echo "Veritabanında kayıtlı hiçbir veri yoktur.";
    }
  }

?>
                </article>
                
            </div>
            
        </div>
        
    </body>
</html>
