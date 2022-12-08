<?php 
require 'config.php';
if ( $_POST ) {
        
$email = $_POST['email'];
$sifre = $_POST['sifre'];

$kontrol = DB::getRow("SELECT * FROM uyeler WHERE email=? AND sifre=?",array(
$email,
$sifre
));

/** başarılı ise */
if ( $kontrol ) {
$_SESSION['login'] = $kontrol->id;
header("Location:anasayfa.php");
die();
}
/**başarılı degil ise */
else
{
header("Location:index.php?error=1");
die();
}       
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <link rel="shortcut icon" type="image/png" href="img/zyro-image.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--yazı tipi-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--css-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    body{
        background-image:url("img/fitness.jpg");
    }

    </style>
<body>

<div class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
<div class="card-header">
                <h3> ENFİTT Giriş Yap</h3>
                
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="sifre" class="form-control" placeholder="Şifre" required="">
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" value="Giriş Yap" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
            
            <?php if ( isset($_GET['success']) ): ?>
                <div class="alert alert-success">
                    Başarıyla kayıt oldunuz.
                </div>
            <?php endif ?>

            <?php if ( isset($_GET['error']) ): ?>
                <div class="alert alert-danger">
                    email veya şifre hatalı.
                </div>
            <?php endif ?>

            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Üye Değilmisin <a href="kayıt-ol.php">Üye Ol</a>
                </div>
                
            </div>
        </div>
     </div>
</div>
</body>
</html>