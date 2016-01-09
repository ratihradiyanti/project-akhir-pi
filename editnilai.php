<?php
include "koneksi.php";
mysql_query("update nilai set nis='$_POST[nis]',nama='$_POST[nama]',tgl_lahir='$_POST[tgl_lahir]',b_indo='$_POST[b_indo]',b_ing='$_POST[b_ing]',matematika='$_POST[matematika]',ipa='$_POST[ipa]',ips='$_POST[ips]',agama='$_POST[agama]',seni='$_POST[seni]'where nis='$_POST[nis]'");
include"datanilai.php";
?>