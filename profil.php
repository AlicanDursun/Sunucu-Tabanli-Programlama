
<!DOCTYPE html>
<?php session_start();?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    .card{position: relative;top:100px;}
    a,a:hover {text-decoration: none; color: white;}
    body{ background: url('img/fon.png');width:100%; height:100%;}
   .modal-header {background-color:#5FCF80; }

</style>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hoşgeldiniz</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="uye-index.php"><span> Doğa Endüstri</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="uye-index.php">Anasayfaya Git</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center form-title" style="color:white;">Profil</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg" style="text-transform: uppercase;"><?php echo  $_SESSION["kullaniciAdi"];?></p>
            <div class="form-group">
              <form  id="loginForm" action="profil2.php" method="post" >
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Ad Soyad"  type="text" autocomplete="off" name="adsoyad"/>
                  <span class="glyphicon glyphicon-user form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Email"  type="text" autocomplete="off" name="email" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"></span>
                  <span class="glyphicon glyphicon-envelope form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="form-group has-feedback">
                  <input class="form-control" placeholder="Şifre"  type="password" autocomplete="off" name="sifre"/>
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;"></span>
                  <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color: rgb(230,230,230);"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat">Güncelle</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
  