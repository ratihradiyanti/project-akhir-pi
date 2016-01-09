<html>
<head><title>Form Edit Nilai Siswa</title></head>
<body>
<?php include"menunilai.php";?>
<center><h2>Form Edit Nilai Siswa</h2></center>
<table border="1">
<?php
mysql_connect("localhost","root","");
mysql_select_db("sekolah");
$sql="select * from nilai where nis='$_REQUEST[nis]'";
$query=mysql_query($sql);
while($baris=mysql_fetch_array($query))
{
?>
<form action="editnilai.php" method="post">
<tr><td>NIS</td><td><input type="text"name="nis"size="40"maxlength="10"
value=<?php echo"'$baris[nis]'";?>></td></tr>
<tr><td>Nama</td><td><input type="text"name="nama"size="40"maxlength="10"
value=<?php echo"'$baris[nama]'";?>></td></tr>
<tr><td>Tanggal Lahir</td><td><input type="text"name="tgl_lahir"size="40"maxlength="10"
value=<?php echo"'$baris[tgl_lahir]'";?>></td></tr>
<tr><td>Bahasa Indonesia</td><td><input type="text"name="b_indo"size="40"maxlength="10"
value=<?php echo"'$baris[b_indo]'";?>></td></tr>
<tr><td>Bahasa Inggris</td><td><input type="text"name="b_ing"size="40"maxlength="10"
value=<?php echo"'$baris[b_ing]'";?>></td></tr>

<tr><td>Matematika</td><td><input type="text"name="matematika"size="40"maxlength="10"
value=<?php echo"'$baris[matematika]'";?>></td></tr>
<tr><td>IPA</td><td><input type="text"name="ipa"size="40"maxlength="10"
value=<?php echo"'$baris[ipa]'";?>></td></tr>
<tr><td>IPS</td><td><input type="text"name="nama"size="40"maxlength="10"
value=<?php echo"'$baris[nama]'";?>></td></tr>
<tr><td>Nama</td><td><input type="text"name="nama"size="40"maxlength="10"
value=<?php echo"'$baris[nama]'";?>></td></tr>
<tr><td>Nama</td><td><input type="text"name="nama"size="40"maxlength="10"
value=<?php echo"'$baris[nama]'";?>></td></tr>


<tr><td><input type="submit"value="edit"></td>
<td><input type="reset"value="hapus"></td></tr>
</form>
<?php } ?>
</table>
</body>
</html>