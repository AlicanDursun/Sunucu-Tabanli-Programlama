
<!DOCTYPE html>
<?php session_start();?>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hoşgeldiniz</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <style>
.modal-header{ background-color:#5FCF80;}
.navbar-nav > li > a{padding: 10px 7px;}
hr{margin-top: 10px;margin-bottom: 10px;}
.dropdown-item2{padding-left: 20px;}
</style>
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
        <li><a href="#">Anasayfa</a></li>
          <li><a href="#feature">Neler Yapıyoruz</a></li>
          <li><a href="#organisations">Hakkımızda</a></li>
          <li><a href="#work-shop">Referanslar</a></li>
          <li><a href="#courses">Galeri</a></li>
          <li><a href="#contactus">İletişim</a></li>
          <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" style="color:#5FCF80;text-transform: uppercase;" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hoşgeldin <?php echo  $_SESSION["kullaniciAdi"];?> <span class="fa fa-sort-desc ">
        </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item dropdown-item2" href="profil.php">Profil</a><hr>
          <a class="dropdown-item dropdown-item2" href="cikis.php">Çıkış yap</a>
        </div>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
 
<?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  
$baglan=mysqli_connect("localhost","root","123","db"); 
if(!$baglan){
  echo "Bağlanılamadı." .mysqli_connect_error();
}
else{
echo "";
$sql = "SELECT * FROM slider ORDER BY id DESC LIMIT 0,1";
$kayit = mysqli_query($baglan,$sql);

if (mysqli_num_rows($kayit) > 0) {
while($goster = mysqli_fetch_assoc($kayit)){
  $baslik=$goster["baslik"];
  $yazi=$goster["yazi"];
  $yazi2=$goster["yazi2"];
  $resim=$goster["resim"];
} } } }
?>
  <div class="banner" style="background: url('./img/<?php echo "{$resim}"; ?>') no-repeat center top;background-size: cover;">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec"><?php echo "{$baslik}"; ?></h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text"><?php echo "{$yazi}"; ?></p>
              <p class="small-text"><?php echo "{$yazi2}"; ?></p>
            </div>
            <a href="#feature" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Feature-->
  <?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  $baglan=mysqli_connect("localhost","root","123","db"); 
  if(!$baglan){
    echo "Bağlanılamadı." .mysqli_connect_error();
  }
  else{
  echo "";
$sql = "SELECT * FROM neleryapiyoruz ORDER BY id DESC LIMIT 0,1";
$kayit = mysqli_query($baglan,$sql);

if (mysqli_num_rows($kayit) > 0) {
while($goster = mysqli_fetch_assoc($kayit)){
  $baslik1 = $goster['baslik1'];
  $yazisi1 =  $goster['yazi1'];
  $baslik2 = $goster['baslik2'];
  $yazisi2 =  $goster['yazi2'];
  $baslik3 = $goster['baslik3'];
  $yazisi3 =  $goster['yazi3'];}
} } }
?>
  <section id="feature" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Neler Yapıyoruz</h2>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4"> 
              <div class="heading pull-right" style="box-shadow:none !important;">
                <h4><?php echo "{$baslik1}"; ?></h4>
                <p><?php echo "{$yazisi1}"; ?></p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-check-square"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right" style="box-shadow:none !important;">
              <h4><?php echo "{$baslik2}"; ?></h4>
                <p><?php echo "{$yazisi2}"; ?></p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-cubes"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right" style="box-shadow:none !important;">
              <h4><?php echo "{$baslik3}"; ?></h4>
                <p><?php echo "{$yazisi3}"; ?></p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-tint"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ feature-->
  <!--Organisations-->
  <?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  $baglan=mysqli_connect("localhost","root","123","db"); 
  if(!$baglan){
  echo "Bağlanılamadı." .mysqli_connect_error();
  }
  else{
  echo "";
$sql = "SELECT * FROM hakkimizda ORDER BY id DESC LIMIT 0,1";
$kayit = mysqli_query($baglan,$sql);

if (mysqli_num_rows($kayit) > 0) {
while($goster = mysqli_fetch_assoc($kayit)){
  $aciklama2=$goster["aciklama"];
} } } }
?>
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="header-section text-center">
          <h2>Hakkımızda</h2>
          <hr class="bottom-line">
        </div>
        </div>
        <div class="col-md-4">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru orga-stru2">
              <h3>Doğa</h3>
              <h3>Endüstri</h3>
              <i class="fa fa-users"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-12 col-xs-12">
          <div class="detail-info">
            <p class="det-p"><?php echo "{$aciklama2}"; ?></p>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  $baglan=mysqli_connect("localhost","root","123","db"); 
  if(!$baglan){
  echo "Bağlanılamadı." .mysqli_connect_error();
  }
  else{
  echo "";
$sql = "select * from referans order by id desc limit 6";
$kayit = mysqli_query($baglan,$sql);

 } }
?>
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
      <div class="header-section text-center">
          <h2>Referanslar</h2>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
        <?php if (mysqli_num_rows($kayit) > 0) {
        $deger=1;
        while($goster = mysqli_fetch_assoc($kayit)){
        $resim=$goster["resim"];
        echo " <div class='fea'>".
        "<div class='col-lg-2 col-md-2 col-sm-4 col-xs-4'>".
        "<div class='heading pull-center' style='box-shadow: 0px 0px 4px 2px rgba(0,0,0,0.1) !important;'>".
        " <img src='img/ref/$resim' class='img-responsive' width='100%' style='height:130px !important'>".
        "</div>".
        "</div>".
        "</div>";
        $deger++;
      } 
    }?>

        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  $baglan=mysqli_connect("localhost","root","123","db"); 
  if(!$baglan){
  echo "Bağlanılamadı." .mysqli_connect_error();
  }
  else{
  echo "";
$sql = "select * from galeri order by id desc limit 6";
$kayit = mysqli_query($baglan,$sql);

 } }
?>
  <!--Courses-->
  <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Galeri</h2>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
<?php if (mysqli_num_rows($kayit) > 0) {
$deger=1;
while($goster = mysqli_fetch_assoc($kayit)){
  $resim=$goster["resim"];
 echo " <div class='col-md-4 col-sm-6 padleft-right'>".
 "<figure class='imghvr-zoom-in'>".
 " <img src='img/$resim' class='img-responsive img-responsive2'>".
"<figcaption>".
" <h2 style='text-align: center;line-height:130px;'><span class='fa fa-search-plus'></span></h2>".
" </figcaption>".
" <a href='#' data-target='#picture$deger' data-toggle='modal'></a>".
"</figure>".
"</div>".
"<div class='modal fade' id='picture$deger' role='dialog'>".
"<div class='modal-dialog modal-lg'>".
"<div class='modal-content'>".
"<div class='modal-header'>".
" <button type='button' class='close' data-dismiss='modal'>&times;</button>".
"<h4 class='modal-title text-center form-title' style='color:white;'>Login</h4>".
"</div>".
"<div class='modal-body padtrbl'>".
"<div class='login-box-body'>".
"<img src='img/$resim' class='img-responsive'>".
"</div>".
"</div>".
"</div>".
"</div>".
"</div>";
$deger++;
      } 
    }
      ?>
      </div>
    </div>
  </section>
  <!--/ Courses-->
  <?php
if($_SERVER['REQUEST_METHOD']=="GET"){
  $baglan=mysqli_connect("localhost","root","123","db"); 
  if(!$baglan){
  echo "Bağlanılamadı." .mysqli_connect_error();
  }
  else{
  echo "";
$sql = "SELECT * FROM iletisimbilgi ORDER BY id DESC LIMIT 0,1";
$kayit = mysqli_query($baglan,$sql);

if (mysqli_num_rows($kayit) > 0) {
while($goster = mysqli_fetch_assoc($kayit)){
  $tel=$goster["tel"];
  $fax=$goster["fax"];
  $email=$goster["email"];
  $adres=$goster["adres"];

} } } }
?>
  <!--Contact-->
  <section id="contactus" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>İletişim</h2>
          <hr class="bottom-line">
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
						<div class="footer-heading">
                <ul>
								<li><b>Telefon:</b> <?php echo "0$tel"; ?></li>
								<li><b>Fax:</b> <?php echo "0$fax"; ?></li>
								<li><b>Email:</b> <?php echo "{$email}"; ?></li>
                <li><b>Adres:</b> <?php echo "{$adres}"; ?></li>
                <h3><span><a href="https://www.facebook.com/dogaendustri/"><i class="fa fa-facebook"></i></a></span>
                <span><a href="https://www.instagram.com/doga.endustri/"><i class="fa fa-instagram"></i></a></span></h3>
							</ul>
						</div>
          </div>
        <form action="iletisim.php" method="get"  >
          <div class="col-md-7 col-sm-7 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="adsoyad" class="form-control form"  placeholder="Adınız Soyadınız *" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email"  placeholder="Email Adresiniz *" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="konu"  placeholder="Konu *" />
            </div>
            <div class="form-group">
              <textarea class="form-control" name="mesaj" rows="5"  placeholder="Mesajınız *"></textarea>
            </div>
          <div class="form-group">
              <input  type="submit"  class="form contact-form-button light-form-button oswald light" value="Gönder">
          </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!--/ Contact-->
  <footer id="footer" class="footer" style="padding-top: 0;padding-bottom:20px;">
    <div class="container text-center">
          <div class="col-md-12">
      <ul class="social-links">
        <li> Doğa Endüstri 2003</li>
      </ul>
  </div>
   <div class="col-md-12 text-center">
      © <?php echo date('Y');?> Tüm Hakları Saklıdır.
   </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="form/iletisim.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
<?php

     
     if($_SERVER['REQUEST_METHOD']=="GET"){
      $baglan=mysqli_connect("localhost","root","123","db"); 
      if(!$baglan){
      echo "Bağlanılamadı." .mysqli_connect_error();
      }
      else{
     $sql = "UPDATE sayim SET ziyaret=ziyaret+1 WHERE id = 1";
    $kayit = mysqli_query($baglan,$sql);
 }

}

?>
</html>
