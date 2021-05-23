<html>
    <head>
        <title>İletisim</title>
        <link rel="stylesheet" type="text/css" href="iletisimstyle.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="wrapper">
            
            <div class="menu-bar">
                <ul>
                <li class "active"> <a href ="index.php">Ana Sayfa</a></li>
                        <li> <a href ="CV.php">Özgeçmiş</a></li>
                        <li> <a href ="Şehrim.php">Şehrim</a></li>
                        <li> <a href ="Mirasimiz.php">Mirasım</a></li>
                        <li> <a href ="iletisim.php">İletişim</a></li>
                        <li> <a href ="ilgialanlarim.php">İlgi Alanlarım</a></li>
                        <li> <a href ="giris.php">Giriş</a></li>
                </ul>
            </div>
            <div class="testimonial"></div>
            
            <article>
                <h1> </h1>

                <blockquote>
                  
                </blockquote>
                <h5></h5>
                <p>

                </p>
                <section id="iletisim">
                    <div class= "container ">
                        <h3 id= h3iletisim> İletişim</h3>

                        <form action="iletisim.php" method="post">
                        <div id= "iletisimopak">
                            <div id= "formgroup">
                                <div id= "solform">
                                    <input type="text" name="isim" placeholder ="Ad Soyad" required class="form-control">
                                    <input type="text" name= "tel" placeholder ="TelefonNumarası" required class="form-control">
                                        </div>
                                    <div id= "sagform">
                                        <input type="email" name="mail" placeholder ="Email adresiniz" required class="form-control">
                                        <input type="text" name= "konu" placeholder ="Konu başlığı" required class="form-control">
                                        <input type="radio" name="cinsiyet" value="erkek" checked> Erkek<br>
                                        <input type="radio" name="cinsiyet" value="kadin"> Kadın<br>
                                       
                                </div>
                                <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class= "form-control"></textarea>
                               <input type="submit" value= "Gönder">
                               <input type="reset"  value= "Temizle">
                            </div>
                            
                                </div>
                                </div>

                                </form> 
                                </section>
        
                </div>
            </article>
            
        </div>
        
    </div>
    </body>
</html>
<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"], $_POST["cinsiyet"]))
{
    $adsoyad=$_POST["isim"];
    $telefon=$_POST["tel"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];
    $cinsiyet=$_POST["cinsiyet"];
    $ekle= "INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj, cinsiyet) VALUES 
    ('".$adsoyad."', '".$telefon."', '".$email."','".$konu."', '".$mesaj."','".$cinsiyet."')";
    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız başarıyla gönderildi.')</script>";
    }
    else {
        echo "<script>alert('Mesajınız gönderilirken hata oluştu.')</script>";
    }
}

?>