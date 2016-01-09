<?php
include "koneksi.php";
  
$username = $_POST['username'];
$password = $_POST['password'];
  
$login  = mysql_query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$match = mysql_num_rows($login);
  
if ($username==guru){
    include "datanilai.php";
}
else {
    include"nilaisiswa.php";  
}
?> 