<html lang="tr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Merhaba</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  </head>
  <body class="fon">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin-dashboard.php"><span> Doğa Endüstri</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="admin-slider.php">Slider</a></li>
          <li><a href="admin-neleryapiyoruz.php">Neler Yapıyoruz</a></li>
          <li><a href="admin-hakkimizda.php">Hakkımızda</a></li>
          <li><a href="admin-galeri.php">Galeri</a></li>
          <li><a href="admin-referans.php">Referanslar</a></li>
          <li><a href="admin-iletisim.php">İletişim</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="work-shop" class="section-padding col-md-12">
  <div class="wrapper2">
        <div class="col-md-2 col-sm-2">
          <div class="text-comment">
            <p class="text-par"><h3> Admin Paneli</h3></p><hr>
            <ol> 
            <li><a href="#"><span class="fa fa-list"></span> Anasayfa</a></li>
                <li><a href="admin-mesaj.php"> <span class="fa fa-envelope"> </span> Mesajlar
                <?php
   $i=0;
   if($_SERVER['REQUEST_METHOD']=="GET"){
    $baglan=mysqli_connect("localhost","root","123","db"); 
    if(!$baglan)
     {
      echo "Bağlanılamadı." .mysqli_connect_error();
     }else{
   echo "";
   $sql = "Select * from iletisim";
  $kayit = mysqli_query($baglan,$sql);
  if (mysqli_num_rows($kayit) > 0) {
  while($goster = mysqli_fetch_assoc($kayit)){
  $i++;
     }
    echo "<span class='badge' style='background:red;'>$i</span>";
     } 
else{echo "";}
   }}
?>
  </a></li>
  <li><a href="admin-kullanici.php"> <span class="fa fa-user"> </span> Kullanıcılar
    <?php
   $i=0;
   if($_SERVER['REQUEST_METHOD']=="GET"){
    $baglan=mysqli_connect("localhost","root","123","db"); 
    if(!$baglan)
     {
      echo "Bağlanılamadı." .mysqli_connect_error();
     }else {
   echo "";
   $sql = "Select * from kullanicilar";
  $kayit = mysqli_query($baglan,$sql);
  if (mysqli_num_rows($kayit) > 0) {
  while($goster = mysqli_fetch_assoc($kayit)){
  $i++;
     }
    echo "<span class='badge' style='background:red;'>$i</span>";
     } 
else {echo "";}
    }}
?>
  </a></li>
  
                <li><a href="cikis.php"><span class="fa fa-cog"> Çıkış</a></li>

            </ol>
          </div>
        </div>
        <div class="col-md-10 col-sm-10">
          <div class="text-comment">
          <div class="row">
        <div class="header-section text-center">
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-line-chart color-green"></i>
            </div>
            <div class="icon-text">
            <h4 class="ser-text"> Merhaba Admin</h4>
              <h4 class="ser-text"></h4>
            </div>
          </div>
        </div>
       
      </div>
        </div>
      </div>
 </section>
 <hr>
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
  </html>