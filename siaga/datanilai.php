<?php
mysql_connect("localhost","root","");
mysql_select_db("sekolah");
$sql="select * from nilai";
$query=mysql_query($sql);
$jumlah=mysql_num_rows($query);
include "menuadmin.php";
echo "<center><h2>Data Nilai Siswa</h2></center>";
echo "<center>";
echo "<table border=1>";
echo "<tr><th>NIS</th><th>Nama</th><th>Tanggal Lahir</th>";
echo "<th>Bahasa Indonesia</th><th>Bahasa Inggris</th><th>Matematika</th><th>IPA</th><th>IPS</th><th>Agama</th><th>Seni</th><th>Edit</th><th>Hapus</th></tr>";
while($baris=mysql_fetch_array($query))
{
echo "<tr>";
echo "<td>$baris[nis]</td>";
echo "<td>$baris[nama]</td>";
echo "<td>$baris[tgl_lahir]</td>";
echo "<td>$baris[b_indo]</td>";
echo "<td>$baris[b_ing]</td>";
echo "<td>$baris[matematika]</td>";
echo "<td>$baris[ipa]</td>";
echo "<td>$baris[ips]</td>";
echo "<td>$baris[agama]</td>";
echo "<td>$baris[seni]</td>";
echo "<td><a href=formeditnilai.php?nis=$baris[nis]>Edit</a></td>";
echo "<td><a href=hapusnilai.php?nis=$baris[nis]>Hapus</a></td>";
echo "</tr>";
}
echo "</table>";
echo "</center>";
?>