<?php 

echo $dbname = "bmtpas_db";
echo $user = "bmtpas_dbuser";
echo $psw = "bmtpas_dbuser123";

$connect =  mysqli_connect("localhost",$user,$psw, $dbname);   

$qGetBerita = "SELECT * FROM berita WHERE link_berita ='murabahah-murah-2021' ";
$getBerita = mysqli_query($connect, $qGetBerita);
$berita = mysqli_fetch_assoc($getBerita);
echo "<pre>";
print_r($berita);

?>
