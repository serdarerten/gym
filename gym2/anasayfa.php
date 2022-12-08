<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENFİT</title>
    <link rel="shortcut icon" type="image/png" href="img/zyro-image.png"/>
    <link rel="stylesheet" href="style2.css">
</head>
<style>
    body{
        background-image:url("img/gym10.jpg");
    }

    </style>
<body>
    
  <header class="container">
    <nav> 
        <div class="logo">
        <img src="img/zyro-image.png" width="100" height="100" alt="logo" />

            
        </div>
<div class="menu"> 
<ul> 
    <li><a href="anasayfa.php">Anasayfa</a></li>
    <li><a href="paketler.php">Paketler</a></li>
    <li><a href="mailto:serdarertn@gmail.com">İletişim</a></li>
</ul>
</div>
    </nav>
  </header>
</body>
</html>
<?php 

require 'config.php';
if ( isset($_GET['cikisYap']) ) {
    unset($_SESSION['login']);
    header("Location:index.php");
    die();
}

if ( !isset($_SESSION['login']) ) {
    header("Location:index.php");
 die();
}
$kullanici_id = $_SESSION['login'];
$kullanici = DB::getRow("SELECT * FROM uyeler WHERE id=?",array( $kullanici_id ));

?>

