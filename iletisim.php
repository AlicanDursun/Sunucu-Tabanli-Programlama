<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .card{position: relative;top:100px;}
    a,a:hover {text-decoration: none; color: white;}
    body{ background: url('img/fon.png');width:100%; height:100%;}
</style>

<?php
if(isset($_GET['adsoyad'])){
$adsoyad=$_GET["adsoyad"];
$email=$_GET["email"];
$konu=$_GET["konu"];
$mesaj=$_GET["mesaj"];

if($adsoyad=="" || $email=="" || $mesaj=="" ||  $konu=="" )
{
    echo"<center>"; 
    echo "<div class='card text-white bg-danger mb-3' style='max-width: 18rem;'><div class='card-header'>Mesajınız Gönderilemedi!</div><div class='card-body'><h5 class='card-title'>Hata!"." ".$adsoyad."</h5><p class='card-text'>Lütfen tüm alanları doldurunuz.</p><button class='btn-secondary'><a href='http://localhost:8080/dogaendustri/index.php'>Anasayfaya Git</button></div></div>";
    echo "</center>"; 
}
else
{
    
if($_SERVER['REQUEST_METHOD']=="GET")
{
    $baglan=mysqli_connect("localhost","root","123","db"); 

if(!$baglan){echo "";}
else{echo "";}
		$sql = "insert into iletisim (adsoyad,email,mesaj,konu) values('$adsoyad','$email','$mesaj','$konu')";
        $kayit = mysqli_query($baglan,$sql);
		echo"<center>"; 
        echo "<div class='card text-white bg-success mb-3' style='max-width: 18rem;'><div class='card-header'>Mesaj Gönderildi</div><div class='card-body'><h5 class='card-title'>Teşekkürler,"." ".$adsoyad."</h5><p class='card-text'>Mesajınız bize iletildi. En kısa zamanda geri dönüş sağlanacaktır. </p><button class='btn-secondary'><a href='http://localhost:8080/dogaendustri/index.php'>Anasayfaya Git</button></div></div>";
        echo "</center>"; 
}
else
{echo "HATA!!!";}

}}
?>