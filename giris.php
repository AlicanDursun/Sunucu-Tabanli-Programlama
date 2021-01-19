<?php
    session_start();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .card{position: relative;top:100px;}
    a,a:hover{text-decoration: none; color: white;}
    body{ background: url('img/fon.png');width:100%; height:100%;}
</style>
<?php
if(isset($_GET['giriskuladi']))
{
$kullaniciAdi=$_GET["giriskuladi"];
$sifre=$_GET["girissifre"];

if($kullaniciAdi=="" || $sifre=="")
{
    echo"<center>"; 
    echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Giriş Yapılamadı</div><div class='card-body'><h5 class='card-title'>Tüm alanlar gereklidir!</h5><p class='card-text'>Lütfen kullanıcı adınızı ve şifrenizi giriniz.</p><button class='btn-secondary'><a href='http://localhost:8080/dogaendustri/index.php'>Anasayfa</button></div></div>";
    echo "</center>";
}
else
{
if($_SERVER['REQUEST_METHOD']=="GET")
{
$baglan=mysqli_connect("localhost","root","123","db");
if(!$baglan){
echo "";}
else
{echo "";}
$sql=mysqli_query($baglan,"SELECT * FROM kullanicilar WHERE kullaniciAdi='$kullaniciAdi' and sifre='$sifre'")
    or die("Hata!!".mysqli_connect_error());
	$sonuc=mysqli_fetch_array($sql);
    if($kullaniciAdi=='admin' and $sifre=='admin'){
		header("Location: admin-dashboard.php");
        echo "hello Admin";
	}
    else
      {
	   if($sonuc['kullaniciAdi']==$kullaniciAdi and $sonuc['sifre']==$sifre)
       {  
          $_SESSION["kullaniciAdi"]=$kullaniciAdi;  
          header("Location: uye-index.php");
           
	  }
	  else
	  {
		echo"<center>"; 
        echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Giriş Yapılamadı!</div><div class='card-body'><h5 class='card-title'>Kullanıcı adı veya şifre yanlış!!</h5><p class='card-text'>Şifrenizi unuttuysanız. Yeni şifre alınız. </p><button class='btn-danger'><a href='sifreunutma.php'>Yeni Şifre</a></button>&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn-secondary'><a href='http://localhost:8080/dogaendustri/index.php'>Anasayfa</a></button></div></div>";
        echo "</center>"; 
	  }
    }
}}}
?>