<html>
    <head>
        <meta charset= "utf-8">
        <meta name= "viewport" content="width-device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="girisstyle.css"
        >
        <title>Giriş</title>
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
                
                <!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <link rel="stylesheet"  href="girisstyle.css">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container">
     <div class="header">
         <h1>Giriş</h1>
     </div>
     <div class="main">
         <form action="giris.php" method="post" style="max-width:500px;margin:auto">
             <span>
             <i class="fa fa-user"></i>
                 <input type="email" placeholder="Kullanıcı Adı" name="usrnm" 
                 required oninvalid="this.setCustomValidity('Kullanıcı Boş Girilemez!!')"
                    oninput="this.setCustomValidity('')" >
             </span><br>
             <span>
                 <i class="fa fa-lock"></i>
                 <input type="password" placeholder="Şifre" name="psw" 
                 required oninvalid="this.setCustomValidity('Şifre Boş Geçilemez !!')"
                    oninput="this.setCustomValidity('')" >
             </span><br>
             <button type="submit" class="btn">Giriş Yap</button>

         </form>
     </div>
 </div>
</body>
</html>

<?php

session_start();
if(isset($_POST["usrnm"],$_POST["psw"])){

  if($_POST["usrnm"] =="b201210371@sakarya.edu.tr" && $_POST["psw"] == "b201210371"){
    $_SESSION["user"] = $_POST["usrnm"];
    
    header("location:index.php");
    echo "<script> alert ('Hoşgeldiniz b201210371') </script>"; 
  }

  else{
    echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış')</script>";
  }

}

?>