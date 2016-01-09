<?php
include "koneksi.php";
mysql_query("delete from nilai where nis='$_REQUEST[nis]'");
include"datanilai.php";
?>