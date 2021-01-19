<html lang="tr">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Merhaba</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  </head>
  <body>
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
            <li><a href="admin-dashboard.php"><span class="fa fa-list"></span> Anasayfa</a></li>
                <li><a href="admin-mesaj.php"> <span class="fa fa-envelope"> </span> Mesajlar
    
   <?php
   $i=0;
   if($_SERVER['REQUEST_METHOD']=="GET"){
    $baglan=mysqli_connect("localhost","root","123","db"); 
    if(!$baglan)
     {
      echo "Bağlanılamadı." .mysqli_connect_error();
     }
     else
     {
   echo "";
   $sql = "Select * from iletisim";
  $kayit = mysqli_query($baglan,$sql);

  if (mysqli_num_rows($kayit) > 0) {
  while($goster = mysqli_fetch_assoc($kayit)){
  $i++;
     }
    echo "<span class='badge' style='background:red;'>$i</span>";
     } 
else
{echo "";}
    }
   }
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
     }
     else
     {
   echo "";
   $sql = "Select * from kullanicilar";
  $kayit = mysqli_query($baglan,$sql);

  if (mysqli_num_rows($kayit) > 0) {
  while($goster = mysqli_fetch_assoc($kayit)){
  $i++;
     }
    echo "<span class='badge' style='background:red;'>$i</span>";
     } 
else
{echo "";}
    }
   }
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
          <h2>Neler Yapıyoruz</h2>
          <hr class="bottom-line">
       </div>
        <form action="admin-neleryapiyoruz.php" method="post">
        <div class="col-md-12">
          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <div class="form-group">
              <input type="text" class="form-control" name="baslik1"  placeholder="Birinci Başlık" />
            </div>
            <div class="form-group">
            <textarea class="form-control" name="yazi1" rows="5"  placeholder="Birinci Başlık Yazısı"></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="baslik2"  placeholder="İkinci Başlık" />
            </div>
            <div class="form-group">
            <textarea class="form-control" name="yazi2" rows="5"  placeholder="İkinci Başlık Yazısı"></textarea>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="baslik3"  placeholder="Üçüncü Başlık" />
            </div>
            <div class="form-group">
            <textarea class="form-control" name="yazi3" rows="5"  placeholder="Üçüncü Başlık Yazısı"></textarea>
            </div>
          </div>
          <div class="col-xs-6 col-md-offset-5">
              <input  type="submit"  class="form contact-form-button light-form-button oswald light" value="Ekle">
          </div>
        </div>
        </form>
        <?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $baslik1 = $_POST['baslik1'];
  $yazi1 =  $_POST['yazi1'];
  $baslik2 = $_POST['baslik2'];
  $yazi2 =  $_POST['yazi2'];
  $baslik3 = $_POST['baslik3'];
  $yazi3 =  $_POST['yazi3'];
 
$baglan=mysqli_connect("localhost","root","123","db"); 
mysqli_set_charset($baglan, "utf8");
 
$sqlekle="insert into neleryapiyoruz (baslik1,yazi1,baslik2,yazi2,baslik3,yazi3) values ('$baslik1','$yazi1','$baslik2','$yazi2','$baslik3','$yazi3')";
$sonuc=mysqli_query($baglan,$sqlekle);

if ($sonuc==0){
    echo"Kayıt Başarısız";
}
else{
  $baslik1 ="";
  $yazi1 = "";
  $baslik2 = "";
  $yazi2 = "";
  $baslik3 ="";
  $yazi3 = "";
    echo"Kayıt Başarılı";
  }
}
?>
      </div>
        </div>
      </div>
 </section> <hr>
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  </body>
  </html>