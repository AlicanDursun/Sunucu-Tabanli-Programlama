<?php session_start();?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .card{position: relative;top:100px;}
    a,a:hover {text-decoration: none; color: white;}
    body{ background: url('img/fon.png');width:100%; height:100%;}
</style>
<?php $kuladi=$_SESSION["kullaniciAdi"];?>
<?php
if(isset($_POST['adsoyad']))
{
$adSoyad=$_POST["adsoyad"];
$email=$_POST["email"];
$sifre=$_POST["sifre"];
if($adSoyad=="" || $sifre=="" || $email=="")
{
    echo"<center>"; 
    echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Güncelleme Yapılamadı!</div><div class='card-body'><h5 class='card-title'>Tüm alanlar gereklidir!</h5><p class='card-text'>Lütfen istenilen bilgileri doldurunuz</p><button class='btn-secondary'><a href='profil.php'>Geri</button></div></div>";
    echo "</center>";
}
else
{
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $baglan=mysqli_connect("localhost","root","123","db"); 
    if(!$baglan){echo "";}
    else{echo "";}
    $sql = "UPDATE kullanicilar SET adSoyad='$adSoyad', sifre='$sifre',email='$email' where kullaniciAdi='$kuladi'";
    $kayit = mysqli_query($baglan,$sql);

if(mysqli_query($baglan, $sql)){
    echo"<center>"; 
    echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Profil Güncellendi!</div><div class='card-body'><h5 class='card-title'> ".$kuladi."</h5><p class='card-text'>Güncelleme başarılı. </p><button class='btn-success'><a href='uye-index.php'>Anasayfa</button></div></div>";
    echo "</center>"; 
}
else
{   
    echo"<center>"; 
    echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Profil Güncellenemedi!</div><div class='card-body'><h5 class='card-title'>Kullanıcı adı,".$kuladi."</h5><p class='card-text'>Bir sorun oluştu. Lütfen tekrar deneyin.</p><button class='btn-secondary'><a href='sifreunutma.php'>Geri</button></div></div>";
    echo "</center>";  
}}}}
?>