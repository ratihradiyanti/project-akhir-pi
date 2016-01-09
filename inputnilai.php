<?php
include "koneksi.php";
mysql_query("insert into nilai values('$_POST[nis]','$_POST[nama]','$_POST[tgl_lahir]','$_POST[b_indo]','$_POST[b_ing]','$_POST[matematika]','$_POST[ipa]','$_POST[ips]','$_POST[agama]','$_POST[seni]')");
include("datanilai.php");
?>