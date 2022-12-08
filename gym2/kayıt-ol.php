<?php 
    require 'config.php';

    if ( $_POST ) {
        
        $isim_soyisim = $_POST['isim_soyisim'];
        $email        = $_POST['email'];
        $sifre        = $_POST['sifre'];

        $id = DB::insert("INSERT INTO uyeler(uye_adi,email,sifre) VALUES(?,?,?)",array(
            $isim_soyisim,
            $email,
            $sifre
        ));

        header("Location:index.php?success=1");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Ol</title>
    <link rel="shortcut icon" type="image/png" href="img/zyro-image.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

   
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
<h3>Kayıt Ol</h3>
</div>
<div class="card-body">
<form action="" method="POST">
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-user"></i></span>
</div>
<input type="text" name="isim_soyisim" class="form-control" placeholder="İsim Soyisim">
</div>
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-user"></i></span>
</div>
<input type="email" name="email" class="form-control" placeholder="Email">
</div>
<div class="input-group form-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="fas fa-key"></i></span>
</div>
<input type="password" name="sifre" class="form-control" placeholder="Şifre">
</div>
                    
<div class="form-group">
<input type="submit" value="Kayıt Ol" class="btn float-right login_btn">
</div>
</form>
</div>
<div class="card-footer">
<div class="d-flex justify-content-center links">
<a href="#">Giriş Yap</a>
</div>             
</div>
</div>
</div>
</div>
</body>
</html>