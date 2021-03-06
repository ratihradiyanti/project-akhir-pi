<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Nilai</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">HOME</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="profil.html">Profil Sekolah</a>
                    </li>
                    <li>
                        <a href="kompetensi.html">Kompetensi Keahlian</a>
                    </li>
					 <li>
                        <a href="forminputnilai.php">Input Data</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
<center><h2>Form Input Nilai</h2></center>
<center><table border="1">
<form action="inputnilai.php"method="post">
<tr><td>NIS</td><td><input type="text"name="nis" size="40"maxlength="5"></td></tr>
<tr><td>Nama</td><td><input type="text"name="nama" size="40"maxlength="10"></td></tr>
<tr><td>Tanggal Lahir</td><td><input type="date"name="tgl_lahir" size="40"maxlength="15"></td></tr>
<tr><td>Bahasa Indonesia</td><td><input type="text"name="b_indo" size="40"maxlength="30"></td></tr>
<tr><td>Bahasa Inggris</td><td><input type="text"name="b_ing" size="40"maxlength="30"></td></tr>
<tr><td>Matematika</td><td><input type="text"name="matematika" size="40"maxlength="30"></td></tr>
<tr><td>IPA</td><td><input type="text"name="ipa" size="40"maxlength="30"></td></tr>
<tr><td>IPS</td><td><input type="text"name="ips" size="40"maxlength="30"></td></tr>
<tr><td>Agama</td><td><input type="text"name="agama" size="40"maxlength="30"></td></tr>
<tr><td>Seni</td><td><input type="text"name="seni" size="40"maxlength="30"></td></tr>
<tr><td><input type="submit"value="Simpan"></td>
<td><input type="reset"value="Hapus"></td></tr>
</form>
</table></center>
	</div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
