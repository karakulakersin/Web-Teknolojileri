<?php

session_start();
if(isset($_POST["usrnm"],$_POST["psw"])){

  if($_POST["usrnm"] =="b201210371@sakarya.edu.tr" && $_POST["psw"] == "b201210371"){
    $_SESSION["user"] = $_POST["usrnm"];
    header("location:../index.html");
  }

  else{
    echo "<script>alert('Kullanıcı Adı veya Şifre Yanlış')</script>";
  }

}

?>