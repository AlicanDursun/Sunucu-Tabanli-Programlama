
<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET")
{
      $localhost = "localhost";
      $usernamew = "root";
      $passwordw = "123";
      $db = "db";
$baglan = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$baglan)
     {echo "Hata!!";}
  else
   { echo "";}
}
?>